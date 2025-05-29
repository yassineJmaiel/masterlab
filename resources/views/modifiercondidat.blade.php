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
            <form action="/updatecondidat/{{$candidature->id}}" method="post">
                @csrf
                <div class="mb-3">
                    <span>N° Dossier : {{ $candidature->id }}</span>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label>Prénom</label>
                        <input type="text" class="form-control" value="{{ $candidature->user->prenom }}" readonly >
                    </div>
                    <div class="col-md-6">
                        <label>Nom de la famille</label>
                        <input type="text" class="form-control" value="{{ $candidature->user->nom}}" readonly >
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label>CIN</label>
                        <input type="text" class="form-control" value="{{ $candidature->user->cin }}"  readonly >
                    </div>
                    <div class="col-md-6">
                        <label>Email</label>
                        <input type="email" class="form-control" value="{{ $candidature->user->email }}"  readonly >
                    </div>
                </div>

                <div class="mb-3">
                    <label>Téléphone</label>
                    <input type="text" class="form-control" value="{{ $candidature->user->telephone }}" readonly  >
                </div>

                <hr>
                <h6>*Diplômes obtenus et parcours universitaire:</h6>

                <div class="row mb-3">
    <div class="col-md-6">
        <label>Année Bac</label>
        <input type="text" name="annee_bac" class="form-control" value="{{ $candidature->annee_bac }}">
    </div>
    <div class="col-md-6">
        <label>Nature de la licence</label>
        <input type="text" name="nature_licence" class="form-control" value="{{ $candidature->nature_licence }}">
    </div>
</div>

<div class="row mb-3">
    <div class="col-md-6">
        <label>Établissement</label>
        <input type="text" name="etablissement" class="form-control" value="{{ $candidature->etablissement }}">
    </div>
    <div class="col-md-6">
        <label>Année Licence</label>
        <input type="text" name="annee_licence" class="form-control" value="{{ $candidature->annee_licence }}">
    </div>
</div>



<hr>
<h6>*Eléments du calcul de score :</h6>

@for ($i = 1; $i <= 3; $i++)
<div class="row mb-3">
    <div class="col-md-6">
        <label>Moyenne générale de la {{ $i }}ère année</label>
        <input type="text" name="moyenne_annee_{{ $i }}" class="form-control" value="{{ $candidature->{'moyenne_annee_' . $i} }}">
    </div>
    <div class="col-md-6">
        <label>Session d’admission</label>
        <input type="text" name="session_annee_{{ $i }}" class="form-control" value="{{ $candidature->{'session_annee_' . $i} }}">
    </div>
</div>
@endfor

<div class="row mb-3">
    <div class="col-md-6">
        <label>Note PFE</label>
        <input type="text" name="note_pfe" class="form-control" value="{{ $candidature->note_pfe }}">
    </div>
    <div class="col-md-6">
        <label>Nombre de redoublements</label>
        <input type="text" name="redoublement" class="form-control" value="{{ $candidature->redoublement }}">
    </div>
</div>

<div class="mb-3">
    <label>Années blanches</label>
    <input type="text" name="annees_blanches" class="form-control" value="{{ $candidature->annees_blanches }}">
</div>


                <hr>
                

               
                <div class="d-flex gap-3">
                   
                        <button type="submit" class="btn btn-success">modifer</a>

                </div>


            </form>
        </div>
    </div>
</div>
@endsection
