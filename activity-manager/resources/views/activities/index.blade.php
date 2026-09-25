@extends('layouts.app')

@section('title', 'Daftar Kegiatan')

@section('content')
    <a href="{{ route('activities.create') }}">
        Tambah Kegiatan
    </a>

    <h1>Daftar Kegiatan</h1>

    @forelse ($activities as $activity)
        <article>
            <h2>
                {{ $activity->title }}
            </h2>

            <p>
                {{ $activity->activity_date->format('d M Y') }}
            </p>

            <p>Status: {{ $activity->status }}</p>

            <a href="{{ route('activities.show', $activity) }}">
                Detail
            </a>

            <a href="{{ route('activities.edit', $activity) }}">
                Edit
            </a>

            <form method="POST" action="{{ route('activities.destroy', $activity) }}">
                @csrf
                @method('DELETE')

                <button type="submit">
                    Hapus
                </button>
            </form>
        </article>
    @empty
        <p>Belum ada kegiatan.</p>
    @endforelse

@endsection
