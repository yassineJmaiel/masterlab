<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class registeretudiant extends Controller
{
    public function register(Request $request)
    {
        
        $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'prenom_pere' => 'nullable|string|max:255',
            'sexe' => 'required|in:homme,femme',
            'date_naissance' => 'required|date',
            'gouvernorat_naissance' => 'required|string|max:255',
            'nationalite' => 'required|string|max:255',
            'etat_civil' => 'required|string|max:255',
            'cin' => 'required|string|max:20|unique:users',
            'adresse' => 'required|string|max:255',
            'code_postal' => 'required|string|max:10',
            'telephone' => 'required|string|max:20',
            'licence' => 'required|string|max:255',
            'licence_certificat' => 'nullable|file|mimes:pdf',
            'master' => 'nullable|string|max:255',
            'master_certificat' => 'nullable|file|mimes:pdf',
            'interets' => 'nullable|string|max:255',
            'note' => 'nullable|string|max:50',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'photo' => 'nullable|image|max:2048',
        ], [
            'nom.required' => 'Le nom est obligatoire.',
            'nom.string' => 'Le nom doit être une chaîne de caractères.',
            'nom.max' => 'Le nom ne peut pas dépasser 255 caractères.',
        
            'prenom.required' => 'Le prénom est obligatoire.',
            'prenom.string' => 'Le prénom doit être une chaîne de caractères.',
            'prenom.max' => 'Le prénom ne peut pas dépasser 255 caractères.',
        
            'prenom_pere.string' => 'Le prénom du père doit être une chaîne de caractères.',
            'prenom_pere.max' => 'Le prénom du père ne peut pas dépasser 255 caractères.',
        
            'sexe.required' => 'Le sexe est obligatoire.',
            'sexe.in' => 'Le sexe doit être "homme" ou "femme".',
        
            'date_naissance.required' => 'La date de naissance est obligatoire.',
            'date_naissance.date' => 'La date de naissance doit être une date valide.',
        
            'gouvernorat_naissance.required' => 'Le gouvernorat de naissance est obligatoire.',
            'gouvernorat_naissance.string' => 'Le gouvernorat doit être une chaîne de caractères.',
            'gouvernorat_naissance.max' => 'Le gouvernorat ne peut pas dépasser 255 caractères.',
        
            'nationalite.required' => 'La nationalité est obligatoire.',
            'nationalite.string' => 'La nationalité doit être une chaîne de caractères.',
            'nationalite.max' => 'La nationalité ne peut pas dépasser 255 caractères.',
        
            'etat_civil.required' => 'L\'état civil est obligatoire.',
            'etat_civil.string' => 'L\'état civil doit être une chaîne de caractères.',
            'etat_civil.max' => 'L\'état civil ne peut pas dépasser 255 caractères.',
        
            'cin.required' => 'Le numéro de CIN est obligatoire.',
            'cin.string' => 'Le CIN doit être une chaîne de caractères.',
            'cin.max' => 'Le CIN ne peut pas dépasser 20 caractères.',
            'cin.unique' => 'Ce numéro de CIN est déjà utilisé.',
        
            'adresse.required' => 'L\'adresse est obligatoire.',
            'adresse.string' => 'L\'adresse doit être une chaîne de caractères.',
            'adresse.max' => 'L\'adresse ne peut pas dépasser 255 caractères.',
        
            'code_postal.required' => 'Le code postal est obligatoire.',
            'code_postal.string' => 'Le code postal doit être une chaîne de caractères.',
            'code_postal.max' => 'Le code postal ne peut pas dépasser 10 caractères.',
        
            'telephone.required' => 'Le numéro de téléphone est obligatoire.',
            'telephone.string' => 'Le numéro de téléphone doit être une chaîne de caractères.',
            'telephone.max' => 'Le numéro de téléphone ne peut pas dépasser 20 caractères.',
        
            'licence.required' => 'La mention de votre licence est obligatoire.',
            'licence.string' => 'La licence doit être une chaîne de caractères.',
            'licence.max' => 'La licence ne peut pas dépasser 255 caractères.',
        
            'licence_certificat.file' => 'Le certificat de licence doit être un fichier.',
            'licence_certificat.mimes' => 'Le certificat de licence doit être un fichier PDF.',
        
            'master.string' => 'Le master doit être une chaîne de caractères.',
            'master.max' => 'Le master ne peut pas dépasser 255 caractères.',
        
            'master_certificat.file' => 'Le certificat de master doit être un fichier.',
            'master_certificat.mimes' => 'Le certificat de master doit être un fichier PDF.',
        
            'interets.string' => 'Les intérêts doivent être une chaîne de caractères.',
            'interets.max' => 'Les intérêts ne peuvent pas dépasser 255 caractères.',
        
            'note.string' => 'La note doit être une chaîne de caractères.',
            'note.max' => 'La note ne peut pas dépasser 50 caractères.',
        
            'email.required' => 'L\'adresse email est obligatoire.',
            'email.email' => 'L\'adresse email doit être valide.',
            'email.unique' => 'Cette adresse email est déjà utilisée.',
        
            'password.required' => 'Le mot de passe est obligatoire.',
            'password.string' => 'Le mot de passe doit être une chaîne de caractères.',
            'password.min' => 'Le mot de passe doit contenir au moins 8 caractères.',
            'password.confirmed' => 'Les mots de passe ne correspondent pas.',
        
            'photo.image' => 'La photo doit être une image.',
            'photo.max' => 'La taille de la photo ne doit pas dépasser 2 Mo.',
        ]);
        

        $photoPath = null;
        if ($request->hasFile('photo')) {
            $photo = $request->file('photo');
            $photoName = time() . '_' . $photo->getClientOriginalName();
            $photo->move(public_path('uploads/photos'), $photoName);
            $photoPath = 'uploads/photos/' . $photoName;
        }

        $licencePath = null;
        if ($request->hasFile('licence_certificat')) {
            $licence = $request->file('licence_certificat');
            $licenceName = time() . '_' . $licence->getClientOriginalName();
            $licence->move(public_path('uploads/licences'), $licenceName);
            $licencePath = 'uploads/licences/' . $licenceName;
        }

        $masterPath = null;
        if ($request->hasFile('master_certificat')) {
            $master = $request->file('master_certificat');
            $masterName = time() . '_' . $master->getClientOriginalName();
            $master->move(public_path('uploads/masters'), $masterName);
            $masterPath = 'uploads/masters/' . $masterName;
        }

        
        $user = User::create([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'prenom_pere' => $request->prenom_pere,
            'sexe' => $request->sexe,
            'date_naissance' => $request->date_naissance,
            'gouvernorat_naissance' => $request->gouvernorat_naissance,
            'nationalite' => $request->nationalite,
            'etat_civil' => $request->etat_civil,
            'cin' => $request->cin,
            'adresse' => $request->adresse,
            'code_postal' => $request->code_postal,
            'telephone' => $request->telephone,
            'licence' => $request->licence,
            'licence_certificat' => $licencePath,
            'master' => $request->master,
            'master_certificat' => $masterPath,
            'interets' => $request->interets,
            'note' => $request->note,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'photo' => $photoPath,
            'role' => 'etudiant', 
        ]);

        
        return redirect()->route('login')->with('success', 'Inscription réussie ! .');
    }

    public function etudiants()
    {
        $students = User::where('role', 'etudiant')->get();

        return view('listeetudiant', compact('students'));
    }
    
    
    
}
