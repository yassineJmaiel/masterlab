@extends('themeadmin')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header border-bottom border-gray-100 flex-align gap-8">
            <h5 class="mb-0">Postuler : <span style="color: #16a34a"> {{$master->type}} </span> : {{ $master->nom}}</h5>        
            <button type="button" class="text-main-600 text-md d-flex" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Course Details">
                <i class="ph-fill ph-question"></i>
            </button>
        </div>

        <div class="card-body">
            <form action="/postuler" method="POST">
                @csrf

                <input type="hidden" name="master_id" value="{{ $master->id }}">

                

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label>Prénom</label>
                        <input type="text" name="prenom" class="form-control" value="{{Auth::user()->prenom}}" readonly>
                    </div>
                    <div class="col-md-6">
                        <label>Nom de la famille</label>
                        <input type="text" name="nom_famille" class="form-control"value="{{Auth::user()->nom}}" readonly>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label>CIN</label>
                        <input type="text" name="cin" class="form-control" value="{{Auth::user()->cin}}" readonly>
                    </div>
                    <div class="col-md-6">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control" value="{{Auth::user()->email}}" readonly>
                    </div>
                </div>

                <div class="mb-3">
                    <label>Numéro de téléphone</label>
                    <input type="text" name="telephone" class="form-control" value="{{Auth::user()->telephone}}" readonly>
                </div>

                <hr>
                <h6>*Diplômes obtenus et parcours universitaire:</h6>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label>Année d’obtention du diplôme de baccalauréat</label>
                        <input type="text" name="annee_bac" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label>Nature de la licence</label>
                        <input type="text" name="nature_licence" class="form-control">
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label>Etablissement d’origine</label>
                        <input type="text" name="etablissement" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label>Année d’obtention du diplôme de licence</label>
                        <input type="text" name="annee_licence" class="form-control">
                    </div>
                </div>

                
                   
               <input type="hidden" name="specialite" class="form-control" value="test">

               

                <hr>
                <h6>*Eléments du calcul de score :</h6>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label>Moyenne générale de la 1ère année</label>
                        <input type="text" name="moyenne_annee_1" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label>Session d’admission</label>
                        <select name="session_annee_1" class="form-control">
                            <option value="Principale">Principale</option>
                            <option value="Controle">Contrôle</option>
                        </select>
                    </div>
                </div>
                
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label>Moyenne générale de la 2ème année</label>
                        <input type="text" name="moyenne_annee_2" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label>Session d’admission</label>
                        <select name="session_annee_2" class="form-control">
                            <option value="Principale">Principale</option>
                            <option value="Controle">Contrôle</option>
                        </select>
                    </div>
                </div>
                
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label>Moyenne générale de la 3ème année</label>
                        <input type="text" name="moyenne_annee_3" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label>Session d’admission</label>
                        <select name="session_annee_3" class="form-control">
                            <option value="Principale">Principale</option>
                            <option value="Controle">Contrôle</option>
                        </select>
                    </div>
                </div>
                
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label>Note du projet de fin d’études (PFE)</label>
                        <input type="text" name="note_pfe" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label>Nombre d'années de redoublement</label>
                        <input type="number" name="redoublement" class="form-control">
                    </div>
                </div>

                <div class="mb-3">
                    <label>Nombre d'années blanches</label>
                    <input type="number" name="annees_blanches" class="form-control">
                </div>

                <hr>

                <div class="mt-4">
                    <button type="submit" class="btn btn-primary">Soumettre</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
