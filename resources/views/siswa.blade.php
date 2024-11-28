@extends('index')

@section('title', 'Dashboard Siswa')

@section('content')
<div class="w-full h-screen flex mt-10 mx-5 flex-col">
    <h1 class="font-bold text-2xl mb-3">Data Siswa</h1>
    <table class="table table-bordered table-striped w-1/2">
        <thead>
            <th class="text-center">Nama</th>
            <th class="text-center">Nilai</th>
        </thead>
        <tbody>
            @foreach ($data as $n)
            <tr class="text-center">
                <td>{{ $n ['nama'] }}</td>
                <td>{{ $n ['nilai'] }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection