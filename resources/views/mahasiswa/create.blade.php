<!DOCTYPE html>
<html lang="en">
<head>
  @include('layout.head')
</head>

   <body>
        <div class="container mt-5">
            @include('layout.nav')
            <h1 class="text-center mb-5 mt-5"> TAMBAH DATA MAHASISWA TEKNIK</h1>
            <a href="{{route('mahasiswa.index')}}" class="btn btn-secondary mb-3"> Data Mahasiswa</a>
            <form method="POST" action="{{route('mahasiswa.store')}}">
            @csrf
            <div class="row g-10">
                <div class="col">
                    <input type="text" class="form-control" placeholder="NIM" name="nim">
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="NAMA" name="nama">
                </div>
            </div>
            <div class="row g-10">
                <div class="col">
                    <input type="email" class="form-control" placeholder="EMAIL" name="email">
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="ALAMAT" name="alamat">
                </div>
            </div>
            <button type="submit" class="btn btn-secondary float-end">Tambah</button>
            </form>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>

            <!--Footer -->
            <footer class="main-footer " >
                @include('layout.footer')
            </footer>
                @include('layout.javs')
        </div>
    </body>
    </html>
