@extends('layouts.app')

<header class="text-white py-3" style="background-color: #4a5a82;">
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
<br>
@section('content')
<div class="d-flex justify-content-center align-items-center" style="height: 100vh;">
    <div class="card shadow" style="width: 400px; background-color: #4a5a82; color: white; border-radius: 10px;">
        <div class="card-body">
            <h1 class="text-center mb-4 fw-bold">Prijava incidenta</h1>

            <form action="{{ route('incident.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                     <label class="form-label text-white">Naslov incidenta</label>
                     <input type="text" name="title" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="type" class="form-label">Tip incidenta</label>
                    <select class="form-select" name="type" required>
                        <option value="">Izberi iz seznama</option>
                        <option value="Tehnični">Tehnični</option>
                        <option value="Uporabniški">Uporabniški</option>
                        <option value="Omrežni">Omrežni</option>
                        <option value="Drugo">Drugo</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="location" class="form-label">Lokacija/sistem</label>
                    <select class="form-select" name="location" required>
                        <option value="">Izberi iz seznama</option>
                        <option value="Psihiatrija">Psihiatrija</option>
                        <option value="Stolpnica">Stolpnica</option>
                        <option value="Stavba 3">Stavba 3</option>
                        <option value="Otroški">Otroški</option>
                        <option value="Drugo">Drugo</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Opis incidenta</label>
                    <textarea class="form-control" name="description" rows="3" placeholder="Opišite težavo" required></textarea>
                </div>

                <hr style="border-color: white;">
                <p class="mb-1">Kontaktni podatki</p>

                <div class="mb-2 d-flex justify-content-between">
                    <input type="text" class="form-control me-1" name="first_name" placeholder="Ime" required>
                    <input type="text" class="form-control ms-1" name="last_name" placeholder="Priimek" required>
                </div>

                <div class="mb-3">
                    <input type="text" class="form-control" name="contact" placeholder="E-mail/telefon" required>
                </div>

                <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-dark w-50">Prijava incidenta</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
