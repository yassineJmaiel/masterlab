<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\application;
class ApplicationController extends Controller
{
    
public function store(Request $request)
{
    $request->validate([
        'annee_bac' => 'required',
        'nature_licence' => 'required',
        'etablissement' => 'required',
        'annee_licence' => 'required',
        'specialite' => 'required',
        'moyenne_annee_1' => 'required',
        'session_annee_1' => 'required',
        'moyenne_annee_2' => 'required',
        'session_annee_2' => 'required',
        'moyenne_annee_3' => 'required',
        'session_annee_3' => 'required',
        'note_pfe' => 'required|required',
        'redoublement' => 'integer',
        'annees_blanches' => 'integer',
    ]);

    Application::create([
        'user_id' => auth()->id(),
        'master_id' => $request->master_id, 

        'annee_bac' => $request->annee_bac,
        'nature_licence' => $request->nature_licence,
        'etablissement' => $request->etablissement,
        'annee_licence' => $request->annee_licence,
        'specialite' => $request->specialite,

        'moyenne_annee_1' => $request->moyenne_annee_1,
        'session_annee_1' => $request->session_annee_1,
        'moyenne_annee_2' => $request->moyenne_annee_2,
        'session_annee_2' => $request->session_annee_2,
        'moyenne_annee_3' => $request->moyenne_annee_3,
        'session_annee_3' => $request->session_annee_3,

        'note_pfe' => $request->note_pfe,
        'redoublement' => $request->redoublement,
        'annees_blanches' => $request->annees_blanches,
    ]);

    return redirect()->back()->with('success', 'Votre candidature a été enregistrée.');
}
}
