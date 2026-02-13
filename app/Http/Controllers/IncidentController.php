<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Incident;

class IncidentController extends Controller
{
    public function create()
    {
        return view('incident_form');
    }

    public function store(Request $request)
    {
        $request->validate([
            'tip' => 'required',
            'lokacija' => 'required',
            'opis' => 'required',
            'ime' => 'required',
            'priimek' => 'required',
            'kontakt' => 'required|email',
        ]);

        Incident::create($request->all());
        return redirect('/incident')->with('success', 'Incident uspešno prijavljen.');
    }
}
