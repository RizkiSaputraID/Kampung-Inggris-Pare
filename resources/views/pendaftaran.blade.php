@extends('layouts.main')
@section('container')
<div class="row justify-content-center">
  <main class="form-registration">
    <h4 class="mb-3">Pendaftaran</h4>
    <form action="/pendaftaran" method="POST">
      @csrf
              <div class="row g-3">
                <div class="col-sm-12">
                  <label for="nama">Nama</label>
                  <input type="text" placeholder="nama" name="nama" required>
                  <div class="invalid-feedback">
                    Valid first name is required.
                  </div>
                </div>
                <div class="col-sm-12">
                  <label for="email">Email</label>
                  <input type="email" placeholder="email" name="email" required>
                  <div class="invalid-feedback">
                    Please enter a valid email address.
                  </div>
                </div>
                <div class="col-sm-12">
                  <label for="nohp">No HP</label>
                  <input type="text" placeholder="nohp" name="nohp" required>
                  <div class="invalid-feedback">
                    Please enter a valid email address.
                  </div>
                </div>
                <div class="col-sm-12">
                  <label for="alamat">Alamat</label>
                  <input type="text" placeholder="alamat" name="alamat" required>
                  <div class="invalid-feedback">
                    Please enter a valid email address.
                  </div>
                </div>
                <div class="col-sm-12">
                  <label for="kota">Kota</label>
                  <input type="text" placeholder="kota" name="kota" required>
                  <div class="invalid-feedback">
                    Please enter a valid email address.
                  </div>
                </div>
                <div class="col-sm-12">
                  <label for="provinsi">Provinsi</label>
                  <input type="text" placeholder="provinsi" name="provinsi" required>
                  <div class="invalid-feedback">
                    Please enter a valid email address.
                  </div>
                </div>
                <div class="col-sm-12">
                  <label for="pekerjaan">Pekerjaan</label>
                  <input type="text" placeholder="pekerjaan" name="pekerjaan" required>
                  <div class="invalid-feedback">
                    Please enter a valid email address.
                  </div>
                </div>
              
    
              <hr class="my-4">
    
              <button class="w-100 btn btn-primary btn-lg" type="submit">Daftar</button>
           
          </div>
        </div>
    </form>
  </main>
</div>
@endsection
