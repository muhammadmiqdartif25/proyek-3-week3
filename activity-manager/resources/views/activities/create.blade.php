@extends('layouts.app')

@section('title', 'Tambah Kegiatan')

@section('content')

    <h1>Tambah Kegiatan</h1>

    <form method="POST" action="{{ route('activities.store') }}">
        @csrf
        @include('activities._form', [
            'submitLabel' => 'Simpan'
        ])
    </form>

@endsection