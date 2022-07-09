@extends('dashboard.layouts.main')
@section('container')
  <body>
    <h1 class="mb-5">Pendaftar</h1>
  <div class="content">
    <div class="container">
      <div class="card-header">
        <div class="card-tools">
          <a href="/dashboard/account/report" class="btn btn-success" target="_blank">Cetak Daftar Pendaftar <i class="bi bi-printer"></i> </a>
        </div>
      </div>
      <div class="card-body">
        <div class="table-responsive custom-table-responsive">
  
          <table class="table custom-table">
            <thead>
              <tr>  
                <th scope="col">#</th>  
                <th scope="col">Nama</th>
                <th scope="col">Email</th>
                <th scope="col">No WA</th>
                <th scope="col">Alamat</th>
                <th scope="col">Kota</th>
                <th scope="col">Provinsi</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($pendaftarans as $pendaftaran)
                  <tr>
                      <td>{{ $loop->iteration }}</td>
                      <td>{{ $pendaftaran->nama }}</td>
                      <td>{{ $pendaftaran->email }}</td>
                      <td>{{ $pendaftaran->nohp }}</td>
                      <td>{{ $pendaftaran->alamat }}</td>
                      <td>{{ $pendaftaran->kota }}</td>
                      <td>{{ $pendaftaran->provinsi }}</td>
                      <td>{{ $pendaftaran->pekerjaan }}</td>
                  </tr>
              @endforeach
              
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  
@endsection