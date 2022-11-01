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
            <hr/>
            <div class = "row">
              <div class = "col-md-12">
                <label for="inputName">Pet</label>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Species</th>
                            <th>DOB</th>
                            <th>Sex</th>
                            <th>Race</th>
                            <th>Color</th>
                            <th>Pattern</th>
                            <th>Age</th>
                            <th>Blood Type</th>
                            <th>Spayed</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($pet as $p)
                        <tr>
                            <td>{{$p->name}}</td>
                            <td>{{$p->species}}</td>
                            <td>{{$p->dob}}</td>
                            <td>{{$p->sex}}</td>
                            <td>{{$p->race}}</td>
                            <td>{{$p->color}}</td>
                            <td>{{$p->pattern}}</td>
                            <td>{{$p->age}}</td>
                            <td>{{$p->blood_type}}</td>
                            <td>{{$p->desexing}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
              </div>
            </div>
          </div>
          <!-- /.card-body -->
        </div>
      </div>
      <!-- Administration - End !-->
    </div>
  </div>
</section>
@endsection