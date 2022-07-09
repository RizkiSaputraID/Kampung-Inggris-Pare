<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="/fonts/icomoon/style.css">

    <link rel="stylesheet" href="/css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="/css/style.css">

    <title>Report Pendaftar</title>
  </head>
  <body>
  

  <div class="content">
    
    <div class="container">
      <h2 class="mb-5">LAPORAN PENDAFTARAN</h2>
      

      <div class="table-responsive custom-table-responsive">

        <table class="table custom-table">
          <thead>
            <tr>  
              
              <th scope="col">#</th>
              <th scope="col">Nama</th>
              <th scope="col">Email</th>
              <th scope="col">No. Telp</th>
              <th scope="col">Alamat</th>
              <th scope="col">Kota</th>
              <th scope="col">Provinsi</th>
              <th scope="col">Pekerjaan</th>
              
            </tr>
          </thead>
          <tbody>
            <tr scope="row">
              @foreach ($pendaftarans as $pendaftaran)
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $pendaftaran->nama }}</td>
                    <td>{{ $pendaftaran->email }}</td>
                    <td>{{ $pendaftaran->nohp }}</td>
                    <td>{{ $pendaftaran->alamat }}</td>
                    <td>{{ $pendaftaran->kota }}</td>
                    <td>{{ $pendaftaran->provinsi }}</td>
                    <td>{{ $pendaftaran->pekerjaan }}</td>
                @endforeach
            
            </tr>
            
          </tbody>
        </table>
      </div>


    </div>

  </div>
    
  </body>
</html>