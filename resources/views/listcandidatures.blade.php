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
                        <th>Etudiant </th>
                        <th>cin </th>
                        <th>Nom du Mastère</th>
                        <th>Type</th>
                        <th>Date de Candidature</th>
                        <th>Statut</th>
                         <th> action </th> 
                    </tr>
                </thead>
                <tbody>
                    @foreach($candidatures as $index => $candidature)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $candidature->user->prenom }} {{ $candidature->user->nom }}</td>
                        <td style="color: blue">{{ $candidature->user->cin }}</td>


                        <td>{{ $candidature->master->nom }}</td>
                        <td>{{ $candidature->master->type }}</td>
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

                      <td> <a href="affichercandidature/{{$candidature->id}}" > voir  plus <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                            <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13 13 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5s3.879 1.168 5.168 2.457A13 13 0 0 1 14.828 8q-.086.13-.195.288c-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5s-3.879-1.168-5.168-2.457A13 13 0 0 1 1.172 8z"/>
                            <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0"/>
                          </svg> </a> </td> 
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
