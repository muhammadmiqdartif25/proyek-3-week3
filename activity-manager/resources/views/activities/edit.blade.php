@extends('layouts.app')

@section('title', 'Edit Kegiatan')

@section('content')

    <h1>Edit Kegiatan</h1>

    <form method="POST" action="{{ route('activities.update', $activity) }}">
        @csrf
        @method('PUT')

        @include('activities._form', [
            'submitLabel' => 'Update',
        ])
    </form>

@endsection
