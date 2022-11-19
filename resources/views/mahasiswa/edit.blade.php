<!DOCTYPE html>
<html lang="en">
<head>
  @include('layout.head')
</head>

   <body>
        <div class="container mt-5">
            @include('layout.nav')
        <h1 class="text-center mb-5"> EDIT DATA MAHASISWA TEKNIK</h1>
        <form action="{{ route('mahasiswa.update',$mahasiswa ->id) }}" method="POST">
        @csrf
        @method('patch')
        <div class="row g-10">
          <div class="col">
            <input type="text" id="nim" class="form-control" placeholder="NIM" name="nim" value="{{ $mahasiswa->nim }}">
          </div>
          <div class="col">
            <input type="text" id="nama" class="form-control" placeholder="NAMA" name="nama" value="{{ $mahasiswa->nama }}">
          </div>
        </div>
        <div class="row g-10">
          <div class="col">
            <input type="email" id="email" class="form-control" placeholder="EMAIL" name="email" value="{{ $mahasiswa->email }}">
          </div>
          <div class="col">
            <input type="text"id="alamat" class="form-control" placeholder="ALAMAT" name="alamat" value="{{ $mahasiswa->alamat }}">
          </div>
        </div>
        <button type="submit" class="btn btn-secondary float-end">EDIT</button>
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
