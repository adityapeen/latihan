@extends('template')

@section('title')
Data Mahasiswa
@endsection

@section('konten')
<div class="card mt-2">
    <div class="card-header text-center">
        Daftar Mahasiswa
    </div>
    <div class="card-body">
        <table class="table table-bordered table-hover table-striped">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                </tr>
            </thead>
            <tbody>
                @foreach($mhs as $m)
                <tr>
                    <td>{{ $m->id }}</td>
                    <td>{{ $m->nama }}</td>
                    <td>{{ $m->alamat }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
