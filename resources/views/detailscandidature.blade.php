@extends('themeadmin')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header border-bottom border-gray-100 flex-align gap-8">
            <h5 class="mb-0">Détails Candidature : <span style="color: #16a34a"> {{ $candidature->master->type }} </span> : {{ $candidature->master->nom }}
                
                ( @if( $candidature->statut=="acceptée")
                <span class="badge bg-success text-white">{{$candidature->statut}}</span>

                @elseif($candidature->statut=="refusée")
              <span class="badge bg-danger text-white">{{$candidature->statut}}</span>
                @else
                <span class="badge bg-warning text-white">{{$candidature->statut}}</span>

                @endif  ) </h5>        
        </div>

        <div class="card-body">
            <form>
                <div class="mb-3">
                    <span>N° Dossier : {{ $candidature->id }}</span>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label>Prénom</label>
                        <input type="text" class="form-control" value="{{ $candidature->user->prenom }}" readonly>
                    </div>
                    <div class="col-md-6">
                        <label>Nom de la famille</label>
                        <input type="text" class="form-control" value="{{ $candidature->user->nom}}" readonly>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label>CIN</label>
                        <input type="text" class="form-control" value="{{ $candidature->user->cin }}" readonly>
                    </div>
                    <div class="col-md-6">
                        <label>Email</label>
                        <input type="email" class="form-control" value="{{ $candidature->user->email }}" readonly>
                    </div>
                </div>

                <div class="mb-3">
                    <label>Téléphone</label>
                    <input type="text" class="form-control" value="{{ $candidature->user->telephone }}" readonly>
                </div>

                <hr>
                <h6>*Diplômes obtenus et parcours universitaire:</h6>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label>Année Bac</label>
                        <input type="text" class="form-control" value="{{ $candidature->annee_bac }}" readonly>
                    </div>
                    <div class="col-md-6">
                        <label>Nature de la licence</label>
                        <input type="text" class="form-control" value="{{ $candidature->nature_licence }}" readonly>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label>Établissement</label>
                        <input type="text" class="form-control" value="{{ $candidature->etablissement }}" readonly>
                    </div>
                    <div class="col-md-6">
                        <label>Année Licence</label>
                        <input type="text" class="form-control" value="{{ $candidature->annee_licence }}" readonly>
                    </div>
                </div>

                

                <hr>
                <h6>*Eléments du calcul de score :</h6>

                @for ($i = 1; $i <= 3; $i++)
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label>Moyenne générale de la {{ $i }}ère année</label>
                        <input type="text" class="form-control" value="{{ $candidature->{'moyenne_annee_' . $i} }}" readonly>
                    </div>
                    <div class="col-md-6">
                        <label>Session d’admission</label>
                        <input type="text" class="form-control" value="{{ $candidature->{'session_annee_' . $i} }}" readonly>
                    </div>
                </div>
                @endfor

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label>Note PFE</label>
                        <input type="text" class="form-control" value="{{ $candidature->note_pfe }}" readonly>
                    </div>
                    <div class="col-md-6">
                        <label>Nombre de redoublements</label>
                        <input type="text" class="form-control" value="{{ $candidature->redoublement }}" readonly>
                    </div>
                </div>

                <div class="mb-3">
                    <label>Années blanches</label>
                    <input type="text" class="form-control" value="{{ $candidature->annees_blanches }}" readonly>
                </div>

                <hr>
                <h6>🧮 Partie Score :</h6>
                <div class="mb-3">
                    <input type="text" class="form-control text-success fw-bold" value="Score final : {{ $score}}" readonly>
                </div>

                @if( $candidature->statut=="en cours de vérification")
                <div class="d-flex gap-3">
                   
                        <a href="/accepter/{{$candidature->id}}" class="btn btn-success">Accepter</a>
                   
                   
                       
                        <a href="/refuser/{{$candidature->id}}" class="btn btn-danger">Refuser</a>
                  
                </div>

                @endif

            </form>
        </div>
    </div>
</div>
@endsection
