

@extends('layout.master')
@section('title','Data Siswa')
@section('menuSiswa','active')

@section('content')
    <div class="container text-center mt-3 p-4 bg-white">
        <h1 class="mb-3">Data Siswa</h1>
        @component('layout.alert')
                    @slot('class')
                        danger
                    @endslot

                    @slot('judul')
                    info
                @endslot
                    10 siswa tidak ngoding
                @endcomponent
        <div class="row">
            <div class="col-sm-8 col-md-6 m-auto">
                <ol class="list-group">
                    @forelse ($siswa as $val )
                        <li class="list-group-item">{{ $val }}</li>
                    @empty
                        <div class="alert alert-dark d-inline-block">Tidak ada data</div>
                    @endforelse
                </ol>
            </div>
        </div>
    </div>
@endsection