<!DOCTYPE html>
<html lang="en">
<head>
  @include('layout.head')
</head>
   <body>
    <div class="container mt-5">
        @include('layout.nav')
        <h1 class="text-center mb-5"> DATA MAHASISWA TEKNIK</h1>
        <a href="{{ route('mahasiswa.create') }}" class="btn btn-secondary mb-3"> Tambah</a>
        @if(session('success'))
            <div class="alery alert-succes" role="alert">
                {{ session('success') }}
        @endif
        <div class="card">
            <table class="table">
               <thead>
                    <th>NO</th>
                    <th>NIM</th>
                    <th>NAMA</th>
                    <th>EMAIL</th>
                    <th>ALAMAT</th>
                    <th>ACTION</th>
               </thead>
               <tbody>
               @if($mahasiswa->count()>0)
               @foreach($mahasiswa as $no => $dt)
                    <tr>
                        <td>{{ $no+1 }}</td>
                        <td>{{ $dt -> nim }}</td>
                        <td>{{ $dt -> nama }}</td>
                        <td>{{ $dt -> email }}</td>
                        <td>{{ $dt -> alamat}}</td>
                        <td>
                            <form action="{{ route('mahasiswa.destroy',$dt->id) }}" method="POST">
                                @csrf
                                @method('delete')
                                <a href="{{ route('mahasiswa.edit',$dt->id) }}" class="btn btn-secondary btn-sm">Edit</a>
                                <button class="btn btn-warning btn-sm">Delete</button>
                              </form>
                        </td>
                    <tr>
                @endforeach
                @else
                <tr>
                    <td colspan='10' align='center'> Tidak ada data</td>
                </tr>
                @endif
               </tbody>
            </table>
        </div>
        <!--Footer -->
        <footer class="main-footer " >
          @include('layout.footer')
        </footer>
             @include('layout.javs')
    </div>
</body>
</html>
