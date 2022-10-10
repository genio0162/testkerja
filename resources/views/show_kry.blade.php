@extends('layouts.master')
@section('content')

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">Data Karyawan</h1>
    </div>

    <div class="table-responsive">
      <table class="table table-striped table-sm">
        <thead>
          <tr>
            <th scope="col">NO</th>
            <th scope="col">Nama</th>
            <th scope="col">Alamat</th>
            <th scope="col">Tanggal Lahir</th>
            <th scope="col">Tanggal Bergabung</th>
          </tr>
        </thead>
        <h5>3 karyawan yang pertama kali bergabung</h5>
        <tbody>
          @foreach ($users as $user)
          <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->alamat }}</td>
            <td>{{ $user->tanggal_lahir }}</td>
            <td>{{ $user->tanggal_bergabung }}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
      <table class="table table-striped table-sm">
        <thead>
          <tr>
            <th scope="col">NO</th>
            <th scope="col">Nama</th>
            <th scope="col">Alamat</th>
            <th scope="col">Tanggal Lahir</th>
            <th scope="col">Tanggal Bergabung</th>
          </tr>
        </thead>
        <h5>Semua Karyawan</h5>
        <tbody>
          @foreach ($userss as $users)
          <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $users->name }}</td>
            <td>{{ $users->alamat }}</td>
            <td>{{ $users->tanggal_lahir }}</td>
            <td>{{ $users->tanggal_bergabung }}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </main>

@endsection

