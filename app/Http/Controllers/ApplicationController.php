<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\application;
use App\Models\master;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
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

public function mesapp(){

$candidatures=application::where('user_id',auth::user()->id)->get();

return view('mescondidatures',compact('candidatures'));

}

public function listcandidatures(){

    $candidatures=application::all();
    
    return view('listcandidatures',compact('candidatures'));
    
    }
    public function affichercandidature($id)
    {
        $candidature = application::findOrFail($id);
    
        $MG1 = floatval(str_replace(',', '.', $candidature->moyenne_annee_1));
        $MG2 = floatval(str_replace(',', '.', $candidature->moyenne_annee_2));
        $MG3 = floatval(str_replace(',', '.', $candidature->moyenne_annee_3));
    
        $NC = 0;
        $NP = 0;
        foreach (['session_annee_1', 'session_annee_2', 'session_annee_3'] as $session) {
            if ($candidature->$session === 'Principale') {
                $NP++;
            } elseif ($candidature->$session === 'Controle') {
                $NC++;
            }
        }
    
        $NR = $candidature->redoublement ?? 0;
    
        $average = ($MG1 + $MG2 + $MG3) / 3;
        $score = number_format($average + $NP - $NC - $NR, 2);
    
        return view('detailscandidature', compact('candidature', 'score'));
    }
    
  public function modifiercondidat($id)
    {
        $candidature = application::findOrFail($id);
    
     
    
        return view('modifiercondidat', compact('candidature', ));
    }


     public function deletecondidat($id)
    {
        $candidature = application::findOrFail($id);

        $candidature->delete();
    
     
    
        return redirect()->back()->with('success', 'Candidature Annulé avec succès.');
    }

public function accepter($id)
{
    $candidature = application::find($id);
    $candidature->statut = 'acceptée';
    $candidature->save();

    return redirect()->back()->with('success', 'Candidature acceptée avec succès.');
}

public function refuser($id)
{
    $candidature = application::find($id);
    $candidature->statut = 'refusée';
    $candidature->save();

    return redirect()->back()->with('success', 'Candidature refusée avec succès.');
}


public function deleteuser($id){

    $user=User::find($id);
    $user->delete();

    return redirect()->back()->with('success', 'etudiant  supprimer avec succès.');
}

public function deletemaster($id){

    $user=master::find($id);
    $user->delete();

    return redirect()->back()->with('success', 'master  supprimer avec succès.');
}

public function update(Request $request, $id)
{
    

    $candidature = application::findOrFail($id);
    

    $candidature->update([
        'annee_bac' => $request->annee_bac,
        'nature_licence' => $request->nature_licence,
        'etablissement' => $request->etablissement,
        'annee_licence' => $request->annee_licence,
        'specialite' => "test",

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

    return redirect()->back()->with('success', 'Candidature mise à jour avec succès.');
}


public function updateDetails(Request $request)
{
    $user = User::find(Auth::user()->id);

    $validated = $request->validate([
        'prenom' => 'nullable|string|max:255',
        'nom' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email,' . $user->id,
        'telephone' => 'nullable|string|max:20',
        'cin' => 'nullable|string|max:50',
        'date_naissance' => 'nullable|date',
        'image' => 'nullable|image|max:2048', // Optional profile photo
    ]);

    // Save updated data
    $user->update($validated);

    // If image was uploaded
    if ($request->hasFile('image')) {
    $image = $request->file('image');
    $filename = time() . '_' . $image->getClientOriginalName();
    $destinationPath = public_path('uploads/profile');

    // Create directory if not exists
    if (!file_exists($destinationPath)) {
        mkdir($destinationPath, 0755, true);
    }

    // Move file
    $image->move($destinationPath, $filename);

    // Save relative path in DB
    $user->photo = 'uploads/profile/' . $filename;
    $user->save();
}

    return redirect()->back()->with('success', 'Informations mises à jour avec succès.');
}

public function updatePassword(Request $request)
{
    $request->validate([
        'current_password' => 'required',
        'new_password' => 'required|min:8|confirmed',
    ]);

    $user = User::find(Auth::user()->id);

    if (!Hash::check($request->current_password, $user->password)) {
        return back()->withErrors(['current_password' => 'Le mot de passe actuel est incorrect.']);
    }

    $user->password = Hash::make($request->new_password);
    $user->save();

    return back()->with('success', 'Mot de passe mis à jour avec succès.');
}



}
