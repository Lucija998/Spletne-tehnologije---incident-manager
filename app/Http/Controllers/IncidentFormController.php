<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Incident;

class IncidentFormController extends Controller
{
    public function create()
    {
        return view('incident_form');
    }

    public function store(Request $request)
    {
        // Validacija podatkov
        $validated = $request->validate([
            'title' => 'required|string',
            'type' => 'required|string',
            'location' => 'required|string',
            'description' => 'required|string',
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'contact' => 'required|string',
        ]);

        // Shrani incident
        Incident::create([
            'title' => $validated['title'],
            'type' => $validated['type'],
            'location' => $validated['location'],
            'description' => $validated['description'],
            'first_name' => $validated['first_name'],
            'last_name' => $validated['last_name'],
            'contact' => $validated['contact'],
        ]);

        return redirect()->route('incident.create')->with('success', 'Incident uspešno prijavljen!');
    }
    public function edit(Incident $incident)
{
    return view('incident_edit', compact('incident'));
}

public function update(Request $request, Incident $incident)
{
    $validated = $request->validate([
        'title' => 'required|string',
        'type' => 'required|string',
        'location' => 'required|string',
        'description' => 'required|string',
    ]);

    $incident->update($validated);

    return redirect()
        ->route('incident.index')
        ->with('success', 'Incident je bil uspešno posodobljen.');
}


public function destroy(Incident $incident)
{
    $incident->delete();

    return redirect()->route('incident.index')
        ->with('success', 'Incident izbrisan.');
}

    public function index()
{
    $incidents = Incident::all();
    return view('incident_list', compact('incidents'));
}

}
