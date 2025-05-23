@extends('themeadmin')

@section('content')
<div class="breadcrumb mb-24">
    <ul class="flex-align gap-4">
        <li><a href="index-2.html" class="text-gray-200 fw-normal text-15 hover-text-main-600">Tableau de board</a></li>
        <li> <span class="text-gray-500 fw-normal d-flex"><i class="ph ph-caret-right"></i></span> </li>
        <li><span class="text-main-600 fw-normal text-15">Etudiant</span></li>
    </ul>
</div>
<div class="container-fluid">

    <div class="card">
        <div class="card-body">
            <table id="students-table" class="table table-bordered table-striped">
                <thead class="table-dark">
                    <tr>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>CIN</th>
                        <th>Licence</th>
                        
                        <th>Master(obtenue)</th>
                        <th>Email</th>
                        <th>Téléphone</th>
                        <th>Date de Naissance</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($students as $student)
                    <tr>
                        <td>{{ $student->nom }}</td>
                        <td>{{ $student->prenom }}</td>
                        <td>{{ $student->cin }}</td>
                        <td>
                            @if ($student->licence_certificat)
                                <a href="{{$student->licence_certificat}}" target="_blank" class="text-primary">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                        <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13 13 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5s3.879 1.168 5.168 2.457A13 13 0 0 1 14.828 8q-.086.13-.195.288c-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5s-3.879-1.168-5.168-2.457A13 13 0 0 1 1.172 8z"/>
                                        <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0"/>
                                      </svg>   {{ $student->licence }} </i>

                                </a>
                            @else
                                {{ $student->licence }}
                            @endif
                        </td>
                        
                        <td>
                            @if ($student->master_certificat)
                                <a href="{{$student->master_certificat}}" target="_blank" class="text-primary">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                        <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13 13 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5s3.879 1.168 5.168 2.457A13 13 0 0 1 14.828 8q-.086.13-.195.288c-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5s-3.879-1.168-5.168-2.457A13 13 0 0 1 1.172 8z"/>
                                        <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0"/>
                                      </svg>     {{ $student->master }}
                                </a>
                            @else
                                {{ $student->master }}
                            @endif
                        </td>
                        <td>{{ $student->email }}</td>
                        <td>{{ $student->telephone }}</td>
                        <td>{{ $student->date_naissance }}</td>
                        <td>
                            <div class="d-flex gap-2">
                                <a href="deleteetudiant/{{$student->id}}" class="btn btn-danger btn-sm">Supprimer</a>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- jQuery (necessary for DataTables) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- DataTables CSS (Bootstrap) -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">

<!-- DataTables JS -->
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>

<!-- Custom Dark Mode CSS -->
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

<script>
    var $j = jQuery.noConflict();
    $j(document).ready(function() {
        // Initialize DataTable with Bootstrap 5 styling and dark mode
        $j('#students-table').DataTable();
    });
</script>



@endsection


