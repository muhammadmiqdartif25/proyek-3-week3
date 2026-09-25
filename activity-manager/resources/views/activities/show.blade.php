@extends('layouts.app')

@section('title', $activity->title)

@section('content')
    <h1>{{ $activity->title }}</h1>

    <p>{{ $activity->description }}</p>

    <p>
        Tanggal:
        {{ $activity->activity_date->format('d M Y') }}
    </p>

    <p>Kategori: {{ $activity->category }}</p>

    <p>Status: {{ $activity->status }}</p>

    <a href="{{ route('activities.index') }}">
        Kembali
    </a>
@endsection
