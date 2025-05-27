@extends('themeadmin')

@section('content')
<div class="breadcrumb mb-24">
    <ul class="flex-align gap-4">
        <li><a href="" class="text-gray-200 fw-normal text-15 hover-text-main-600">Tableau de board</a></li>
        <li> <span class="text-gray-500 fw-normal d-flex"><i class="ph ph-caret-right"></i></span> </li>
        <li><span class="text-main-600 fw-normal text-15">Mes candidatures</span></li>
    </ul>
</div>

<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <table id="students-table" class="table table-bordered table-striped">
                <thead class="table-dark">
                    <tr>
                        <th>#</th>
                        <th>Nom du Mastère</th>
                        <th>Type</th>
                        <th>Spécialité</th>
                        <th>Date de Candidature</th>
                        <th>Statut</th>
                        <th> Action</th>
                    
                    </tr>
                </thead>
                <tbody>
                    @foreach($candidatures as $index => $candidature)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $candidature->master->nom }}</td>
                        <td>{{ $candidature->master->type }}</td>
                        <td>{{ $candidature->specialite }}</td>
                        <td>{{ $candidature->created_at->format('d/m/Y') }}</td>
                        <td>
                           
                            @if( $candidature->statut=="acceptée")
                            <span class="badge bg-success text-white">{{$candidature->statut}}</span>
 
                            @elseif($candidature->statut=="refusée")
                          <span class="badge bg-danger text-white">{{$candidature->statut}}</span>
                            @else
                            <span class="badge bg-warning text-white">{{$candidature->statut}}</span>
 
                            @endif                           
                        </td>

                        <td>
                            @if( $candidature->statut=="en cours de vérification")

                          <a href="modifiercondidat/{{$candidature->id}}" class="btn btn-primary">modifier</a>
                            <a href="deletecondidat/{{$candidature->id}}" class="btn btn-danger">Annuler</a>


                          @else 


                            <a href="javascript:void(0)" class="btn btn-primary" style="cursor:no-drop">modifier</a>

                            @endif
                        </td>

                      
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<style>
    body {
        background-color: #121212;
        color: white;
    }

    #students-table {
        background-color: #1e1e1e;
        color: #fff;
    }

    #students-table th {
        background-color: #333;
        color: #fff;
    }

    #students-table td {
        color: #000000;
    }

    #students-table tr:hover {
        background-color: #444;
    }

    
   
</style>
<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- DataTables CSS & JS -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>

<!-- Dark Mode Styling -->

<!-- DataTable Init -->
<script>
    var $j = jQuery.noConflict();
    $j(document).ready(function() {
        $j('#students-table').DataTable();
    });
</script>
@endsection
