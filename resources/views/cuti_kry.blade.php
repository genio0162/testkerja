@extends('layouts.master')
@section('content')

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">Data Cuti Karyawan</h1>
    </div>

    <div class="table-responsive">
      <table class="table table-striped table-sm">
        <thead>
          <tr>
            <th scope="col">NO</th>
            <th scope="col">Nomor Induk</th>
            <th scope="col">Nama</th>
            <th scope="col">Tanggal Cuti</th>
            <th scope="col">Keterangan</th>
          </tr>
        </thead>
        <h5>Daftar karyawan yang pernah cuti</h5>
        <tbody>
          @foreach ($cutis as $cuti)
          <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $cuti->user->nomor_induk }}</td>
            <td>{{ $cuti->user->name }}</td>
            <td>{{ $cuti->tanggal_cuti }}</td>
            <td>{{ $cuti->keterangan }}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
      <table class="table table-striped table-sm">
        <thead>
          <tr>
            <th scope="col">NO</th>
            <th scope="col">Nomor Induk</th>
            <th scope="col">Nama</th>
            <th scope="col">Tanggal Cuti</th>
            <th scope="col">Keterangan</th>
            <th scope="col">Jumlah Cuti</th>
          </tr>
        </thead>
        <h5>Daftar karyawan yang pernah cuti lebih dari 1x</h5>
        <tbody>
          @foreach ($cutiss as $cutis)
          <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $cutis->nomor_induk }}</td>
            <td>{{ $cutis->name }}</td>
            <td>{{ $cutis->cuti->last()->tanggal_cuti }}</td>
            <td>{{ $cutis->cuti->last()->keterangan }}</td>
            <td>{{ $cutis->jumlah_cuti }}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
      <table class="table table-striped table-sm">
        <thead>
          <tr>
            <th scope="col">NO</th>
            <th scope="col">Nomor Induk</th>
            <th scope="col">Nama</th>
            <th scope="col">Sisa Cuti</th>
          </tr>
        </thead>
        <h5>Sisa Cuti Karyawan</h5>
        <tbody>
          @foreach ($cutis3 as $cuti3)
          <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $cuti3->user->nomor_induk }}</td>
            <td>{{ $cuti3->user->name }}</td>
            <td>{{ abs($cuti3->lama_cuti-12) }}&nbsp Hari</td>
          </tr>
          @endforeach
        </tbody>
      </table>
      <table class="table table-striped table-sm">
        <thead>
          <tr>
            <th scope="col">NO</th>
            <th scope="col">Nomor Induk</th>
            <th scope="col">Nama</th>
            <th scope="col">Sisa Cuti</th>
          </tr>
        </thead>
        <h5>Karyawan Yang Cuti Lebih Dari 4x / 4hari dalam sebulan</h5>
        <tbody>
          @foreach ($cutis3 as $cuti3)
          <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $cuti3->user->nomor_induk }}</td>
            <td>{{ $cuti3->user->name }}</td>
            @if ($cuti3->where('tanggal_cuti','=',$month)&& $cuti3->lama_cuti>4)
            <td>Bulan Ini Melampui Batas Cuti</td>
              @elseif ($cuti3->where('tanggal_cuti','=',$month)&& $cuti3->lama_cuti<4)
              <td>Bulan Ini Masih Ada Kesempatan Cuti</td>
            @endif
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </main>

@endsection

