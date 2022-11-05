@extends('theme.default')
@section('content')
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Owner Detail</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item"><a href="#">Owner</a></li>
          <li class="breadcrumb-item active">View</li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class = "col-12">
      <!-- Administration - Start !-->
      <div class="col-md-12">
        <div class="card card-primary">
          <div class="card-body">
            <div class = "row">
              <div class = "col-md-6">
                <div class="form-group">
                  <label for="inputName">No Registrasi</label>
                  <input type="text" class="form-control" value = "{{$owner->kode_pelanggan}}" disabled>
                </div>
              </div>
            </div>
            <div class = "row">
              <div class = "col-md-6">
                <label for="inputName">Nama</label>
                <input type="text" class="form-control" value = "{{$owner->name}}" disabled>
              </div>
            </div>
            <div class = "row">
              <div class = "col-md-6">
                <label for="inputName">No HP</label>
                <input type="text" value = "{{$owner->no_hp}}" class="form-control" disabled>
              </div>
            </div>

            <div class = "row">
              <div class = "col-md-6">
                <label for="inputName">Alamat</label>
                <input type="text" value = "{{$owner->alamat}}" class="form-control" disabled>
              </div>
            </div>
            
            <div class = "row">
              <div class = "col-md-6">
                <label for="inputName">Email</label>
                <input type="text" value = "{{$owner->email}}" class="form-control" disabled>
              </div>
            </div>
          </div>
          <!-- /.card-body -->
        </div>
      </div>
      <div class="col-md-12">
        <div class="card card-purple">
          <div class = "card-header">
            <h3 class = "card-title">Pet</h3>
          </div>
          <div class="card-body">
            <table class = "table table-condensed">
              <thead>
                <tr>
                  <th>Nama</th>
                  <th>Spesies</th>
                  <th>Jenis Kelamin</th>
                  <th>Umur</th>
                  <th>Ras</th>
                  <th>Warna</th>
                </tr>
              </thead>
              <tbody>
                @forelse($pet as $p)
                <tr>
                  <td><a class = "pet_detail" data-pet-id = "{{$p->id}}" href = "#">{{ $p->name }}</a></td>
                  <td>{{ $p->species }}</td>
                  <td>{{ $p->sex }}</td>
                  <td>{{ $p->age }}</td>
                  <td>{{ $p->race }}</td>
                  <td>{{ $p->color }}</td>
                  <td></td>
                </tr>
                @empty
                <tr>
                  <td colspan = "6" class = "txt-center">No pet data.</td>
                </tr>
                @endforelse
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <!-- Administration - End !-->
    </div>
  </div>
</section>
@endsection

@push('scripts')
<script>
  $(function() {
    $('.pet_detail').click(function(e){
      var petId = $(this).attr('data-pet-id');
      $.ajax({
        url: '/pet/detail_ajax/'+petId,
        type: 'GET',
        dataType: 'json',
        async: false,
        success: function (res) {
          return false;
        }
      })
    })
  })
</script>
@endpush