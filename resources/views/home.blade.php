@extends('template')

@section('title')
Data Prodi
@endsection

@section('konten')
<div class="card  mt-2" style="width: 18rem;">
    <div class="card-header text-center">
        Hai {{$nama}},
        <br/>berikut adalah Daftar Prodi
    </div>
    <div class="card-body">
        <table class="table table-bordered table-hover table-striped">
            <thead>
                <tr>
                    <th width=1>No.</th>
                    <th>Nama Prodi</th>
                </tr>
            </thead>
            <tbody>
                <?php $n=1;?>
                @foreach($prodi as $p)
                <tr>
                    <td>{{ $n++ }}</td>
                    <td>{{ $p }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
