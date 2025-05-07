<?php

namespace App\Http\Controllers;

use App\Models\Interest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class InterestController extends Controller
{
    public function addinterest(Request $request)
{
    $request->validate([
        'nom' => 'required|array',
        'nom.*' => 'required|string|max:100'
    ]);

    foreach ($request->nom as $interestName) {
        Interest::create([
            'name' => $interestName,
             'etudiant_id'=>$request->etudiant_id,
        ]);
    }

    return redirect()->back()->with('success', 'Intérêts ajoutés avec succès!');
}

public function destroy($id)
{
    $interet = Interest::findOrFail($id);
    $interet->delete();

    return redirect()->back()->with('success', 'Intérêt supprimé avec succès.');
}


public function mesinterets()
{
    $interets = Interest::where("etudiant_id",Auth::user()->id)->get();
    
    return view("mesinterets",compact('interets'));
}



}
