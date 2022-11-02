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
      @foreach($pet as $p)
      <div class="col-md-12">
        <div class="card card-purple">
          <div class = "card-header">
            <h3 class = "card-title">{{$p->name}}</h3>
          </div>
          <div class="card-body">
            <div class = "row">
              <div class = "col-md-3">
                  <label>Spesies : </label>{{$p->species}}
              </div>
              <div class = "col-md-3">
                  <label>DOB : </label> {{$p->dob}}
              </div>
              <div class = "col-md-6">
                  <label>Jenis Kelamin : </label> {{$p->sex}}
              </div>
            </div>
            <div class = "row">
              <div class = "col-md-3">
                  <label>Ras : </label> {{$p->race}}
              </div>
              <div class = "col-md-3">
                  <label>Warna : </label> {{$p->color}}
              </div>
              <div class = "col-md-6">
                  <label>Pola : </label> {{$p->pattern}}
              </div>
            </div>
            <div class = "row">
              <div class = "col-md-3">
                  <label>Golongan Darah : </label> {{$p->blood_type}}
              </div>
              <div class = "col-md-3">
                  <label>Umur : </label> {{$p->age}}
              </div>
              <div class = "col-md-6">
                  <label>Status Steril : </label> {{$p->desexing}}
              </div>
            </div>
          </div>
          <!-- /.card-body -->
        </div>
      </div>
      @endforeach
      <!-- Administration - End !-->
    </div>
  </div>
</section>
@endsection