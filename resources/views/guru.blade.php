@extends('index')

@section('title', 'Dashboard Guru')

@section('content')
<div class="w-full h-screen flex mt-10 mx-5 flex-col">
    <h1 class="font-bold text-2xl mb-3">Data Guru</h1>
    <table class="table table-bordered table-striped w-1/2">
        <thead>
            <tr>
                <th class="text-center">Nama</th>
                <th class="text-center">Mata Pelajaran</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($dataguru as $guru)
            <tr class="text-center">
                <td>{{ $guru['nama'] }}</td>
                <td>{{ $guru['mapel'] }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
