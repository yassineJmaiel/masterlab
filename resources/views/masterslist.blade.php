@extends('themeadmin')

@section('content')
<div class="breadcrumb mb-24">
    <ul class="flex-align gap-4">
        <li><a href="index-2.html" class="text-gray-200 fw-normal text-15 hover-text-main-600">Acceuil</a></li>
        <li><span class="text-gray-500 fw-normal d-flex"><i class="ph ph-caret-right"></i></span></li>
        <li><span class="text-main-600 fw-normal text-15">Masters</span></li>
    </ul>
</div>

<!-- Course Tab Start -->
<div class="card">
    <div class="card-body">
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-onGoing" role="tabpanel" aria-labelledby="pills-onGoing-tab" tabindex="0">
                <div class="container">
                    <div class="row g-4"> <!-- gap-4 between grid items -->
                        @foreach($masters as $master)
                        <div class="col-xxl-3 col-lg-4 col-md-6 d-flex">
                            <div class="card border border-gray-100 w-100 h-100"> <!-- ensure full height -->
                                <div class="card-body p-8 d-flex flex-column">
                                    <a href="#" class="bg-main-100 rounded-8 overflow-hidden text-center mb-3 h-164 flex-center p-8">
                                        <img src="{{ $master->photo }}" alt="Master Image" style="max-height: 150px;" class="img-fluid">
                                    </a>
                                    <span class="text-13 py-2 px-10 rounded-pill bg-success-50 text-success-600 mb-2">
                                        {{ $master->type }}
                                    </span>
                                    <h5 class="mb-3">
                                        <a href="#" class="hover-text-main-600">{{ $master->nom }}</a>
                                    </h5>

                                    <div class="mt-auto">
                                        @if(Auth::user()->role == "admin")
                                        <div class="d-flex justify-content-center align-items-center gap-2">
                                            
                                                <a href="deletemaster/{{$master->id}}" class="btn btn-danger rounded-pill py-2 px-4">Supprimer</a>
                                            </form>
                                        </div>
                                        @else
                                        <div class="d-flex justify-content-center align-items-center gap-2">
                                            <a href="postuler/{{$master->id}}" class="btn btn-primary">Postuler Maintenant</a>
                                        </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div> <!-- end row -->
                </div> <!-- end container -->
            </div>
        </div>
    </div>
</div>
@endsection
