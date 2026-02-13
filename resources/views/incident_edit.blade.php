@extends('layouts.app')

@section('content')

   <!-- Zgornji header -->
    <header class="text-white py-3" style="background-color: #4a5a82; box-shadow: 0 4px 6px rgba(0,0,0,0.1);">
        <div class="container d-flex justify-content-between align-items-center">
            <h1 class="m-0 fs-3 fw-bold">Incident Manager</h1>
            <div class="d-flex align-items-center">
            <a href="{{ route('dashboard') }}" class="text-white me-3 fs-4" title="Domov">
                <i class="bi bi-house-door-fill"></i>
            </a>
                <i class="bi bi-person-circle fs-4 me-2"></i>
                <span>{{ Auth::user()->name }}</span>
            </div>
        </div>
    </header>

<div class="d-flex justify-content-center mt-4">
    <div class="card shadow"
         style="width: 600px; background-color: #4a5a82; border-radius: 15px;">
        <div class="card-body text-white">

            <h2 class="text-center mb-4 fw-bold">Urejanje incidenta</h2>

            <form method="POST" action="{{ route('incident.update', $incident) }}">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label class="form-label">Naslov</label>
                    <input type="text"
                           name="title"
                           class="form-control"
                           value="{{ $incident->title }}"
                           required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Tip</label>
                    <input type="text"
                           name="type"
                           class="form-control"
                           value="{{ $incident->type }}"
                           required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Lokacija</label>
                    <input type="text"
                           name="location"
                           class="form-control"
                           value="{{ $incident->location }}"
                           required>
                </div>

                <div class="mb-4">
                    <label class="form-label">Opis</label>
                    <textarea name="description"
                              rows="4"
                              class="form-control"
                              required>{{ $incident->description }}</textarea>
                </div>

                <div class="d-flex justify-content-between">
                    <a href="{{ route('incident.index') }}"
                       class="btn btn-dark">
                        ⬅ Nazaj
                    </a>

                    <button type="submit"
                            class="btn btn-dark">
                        💾 Shrani spremembe
                    </button>
                </div>
            </form>

        </div>
    </div>
</div>
@endsection