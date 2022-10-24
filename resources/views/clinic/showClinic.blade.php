@extends('theme.default')

@section('content')
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Klinik</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item">Klinik</li>
          <li class="breadcrumb-item active">List</li>
        </ol>
      </div>
    </div>
  </div>
</div>
@csrf
<section class="content">
    <div class="card">
        <div class="card-header">
      <h3 class="card-title">List Klinik</h3>
      <div style="float:right;">
        <button type="button" class="btn btn-success modif-data"><i class="fa fa-plus"></i>&nbsp; Add</button>
      </div>
        </div>
        <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>No Tlp</th>
                    <th>Operational Hours</th>
                </tr>
            </thead>
            <tbody>
                @foreach($clinics as $clinic)
                <tr>
                    <td>{{ $clinic->nama_klinik }}</td>
                    <td>{{ $clinic->alamat }}</td>
                    <td>{{ $clinic->no_tlp }}</td>
                    <td>{{ $clinic->operational_hours }}</td>
                </tr>
                @endforeach
            </tbody>
            </table>
        </div>
    </div>
</section>
@endsection