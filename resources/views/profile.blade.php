@extends('themeadmin')


@section('content')

            <!-- Breadcrumb Start -->
                <div class="breadcrumb mb-24">
                    <ul class="flex-align gap-4">
                        <li><a href="index-2.html" class="text-gray-200 fw-normal text-15 hover-text-main-600">Home</a></li>
                        <li> <span class="text-gray-500 fw-normal d-flex"><i class="ph ph-caret-right"></i></span> </li>
                        <li><span class="text-main-600 fw-normal text-15">Setting</span></li>
                    </ul>
                </div>
<!-- Breadcrumb End -->
             
            <div class="card overflow-hidden">
                <div class="card-body p-0">
                    <div class="cover-img position-relative">
                        <label for="coverImageUpload" class="btn border-gray-200 text-gray-200 fw-normal hover-bg-gray-400 rounded-pill py-4 px-14 position-absolute inset-block-start-0 inset-inline-end-0 mt-24 me-24">Edit Cover</label>
                        <div class="avatar-upload">
                            <input type='file' id="coverImageUpload" accept=".png, .jpg, .jpeg">
                            <div class="avatar-preview">
                                <div id="coverImagePreview" style="background-image: url('assets/img/isg.jpeg');">
                                </div>
                            </div>
                        </div>
                    </div> 

                    <div class="setting-profile px-24">
                        <div class="flex-between">
                            <div class="d-flex align-items-end flex-wrap mb-32 gap-24">
                                @if(Auth::user()->role=="admin")
                                   <img src="/assets2/images/thumbs/user-img.png" alt="" class="w-120 h-120 rounded-circle border border-white">
                                @else
                                <img src="{{Auth::user()->photo}}" alt="" class="w-120 h-120 rounded-circle border border-white">
                                @endif
                                   @if(Auth::user()->role=="etudiant")

                                <div>
                                    <h4 class="mb-8">{{Auth::user()->nom}} {{Auth::user()->prenom}}</h4>
                                    <div class="setting-profile__infos flex-align flex-wrap gap-16">
                                        <div class="flex-align gap-6">
                                            <span class="text-gray-600 d-flex text-lg"><i class="ph ph-swatches"></i></span>
                                            <span class="text-gray-600 d-flex text-15">{{Auth::user()->licence}}</span>
                                        </div>
                                        <div class="flex-align gap-6">
                                            <span class="text-gray-600 d-flex text-lg"><i class="ph ph-map-pin"></i></span>
                                            <span class="text-gray-600 d-flex text-15">{{Auth::user()->adresse}}</span>
                                        </div>
                                        <div class="flex-align gap-6">
                                            <span class="text-gray-600 d-flex text-lg"><i class="ph ph-calendar-dots"></i></span>
                                            <span class="text-gray-600 d-flex text-15">{{Auth::user()->date_naissance}}</span>
                                        </div>
                                    </div>
                                </div>
                                @endif
                            </div>
                        </div>
                        <ul class="nav common-tab style-two nav-pills mb-0" id="pills-tab" role="tablist">
                                @if(Auth::user()->role=="etudiant")

                            <li class="nav-item" role="presentation">
                              <button class="nav-link " id="pills-details-tab" data-bs-toggle="pill" data-bs-target="#pills-details" type="button" role="tab" aria-controls="pills-details" aria-selected="true">Mes details</button>
                            </li>
                            @endif
                       
                            <li class="nav-item" role="presentation">
                              <button class="nav-link" id="pills-password-tab" data-bs-toggle="pill" data-bs-target="#pills-password" type="button" role="tab" aria-controls="pills-password" aria-selected="false">mot de passe </button>
                            </li>
                            
                        </ul>
                    </div>

                </div>
            </div>
            <div class="tab-content" id="pills-tabContent">
                <!-- My Details Tab start -->
                                @if(Auth::user()->role=="etudiant")

                <div class="tab-pane fade show active" id="pills-details" role="tabpanel" aria-labelledby="pills-details-tab" tabindex="0">
            <div class="card mt-24">
                <div class="card-header border-bottom">
                    <h4 class="mb-4">Mes Informations</h4>
                    <p class="text-gray-600 text-15">Veuillez remplir toutes les informations vous concernant</p>
                </div>
                    <div class="card-body">
            <form action="updateDetails" method="POST" enctype="multipart/form-data">
                @csrf
                            <div class="row gy-4">
                                <div class="col-sm-6">
                                    <label for="prenom" class="form-label mb-8 h6">Prénom</label>
            <input type="text" name="prenom" value="{{ Auth::user()->prenom }}" class="form-control py-11" placeholder="Entrez votre prénom">
                                </div>
                                <div class="col-sm-6">
                                    <label for="nom" class="form-label mb-8 h6">Nom</label>
                                   <input type="text" name="nom" value="{{ Auth::user()->nom }}" class="form-control py-11" placeholder="Entrez votre nom">
                                </div>
                                <div class="col-sm-6">
                                    <label for="email" class="form-label mb-8 h6">Email</label>
                                      <input type="email" name="email" value="{{ Auth::user()->email }}" class="form-control py-11" placeholder="Entrez votre adresse e-mail">
                                </div>
                                <div class="col-sm-6">
                                    <label for="telephone" class="form-label mb-8 h6">Téléphone</label>
                                    <input type="text" name="telephone" value="{{ Auth::user()->telephone }}" class="form-control py-11" placeholder="Entrez votre numéro de téléphone">
                                </div>
                                <div class="col-sm-6">
                                    <label for="cin" class="form-label mb-8 h6">CIN</label>
                                    <input type="text" name="cin" value="{{ Auth::user()->cin }}" class="form-control py-11" placeholder="Entrez votre CIN">
                                </div>
                                <div class="col-sm-6">
                                    <label for="date_naissance" class="form-label mb-8 h6">Date de Naissance</label>
                                   <input type="date" name="date_naissance" value="{{ Auth::user()->date_naissance }}" class="form-control py-11">
                                </div>
                               <div class="col-12">
    <label for="image" class="form-label mb-2 h6">Votre Photo</label>
    <input type="file" name="image" id="image" class="form-control" accept=".png, .jpg, .jpeg, .gif">
    @if(Auth::user()->profile_photo)
        <div class="mt-3">
            <img src="{{ Auth::user()->photo }}" alt="Votre photo" width="120" class="rounded-3 border">
        </div>
    @endif
</div>
                                <div class="col-12">
                                    <div class="flex-align justify-content-end gap-8">
                                        <button type="reset" class="btn btn-outline-main bg-main-100 border-main-100 text-main-600 rounded-pill py-9">Annuler</button>
                                        <button type="submit" class="btn btn-main rounded-pill py-9">Enregistrer</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
    </div>
</div>

   @endif             

                <!-- Password Tab Start -->
                <div class="tab-pane fade" id="pills-password" role="tabpanel" aria-labelledby="pills-password-tab" tabindex="0">
                   <div class="card mt-24">
    <div class="card-header border-bottom">
        <h4 class="mb-4">Changer le mot de passe</h4>
        <p class="text-gray-600 text-15">Modifiez votre mot de passe actuel</p>
    </div>
    <div class="card-body">
        <form action="updatepass" method="POST">
            @csrf
            <input type="email" name="email" autocomplete="username" value="{{ Auth::user()->email }}" hidden>

            <div class="row gy-4">
                <div class="col-12">
                    <label for="current-password" class="form-label mb-8 h6">Mot de passe actuel</label>
                    <div class="position-relative">
<input type="password" name="current_password" id="current-password"
       class="form-control py-11"
       placeholder="Mot de passe actuel"
       autocomplete="current-password">                        <span class="toggle-password position-absolute top-50 inset-inline-end-0 me-16 translate-middle-y ph ph-eye-slash" id="#current-password"></span>
                    </div>
                </div>
                <div class="col-12">
                    <label for="new-password" class="form-label mb-8 h6">Nouveau mot de passe</label>
                    <div class="position-relative">
<input type="password" name="new_password" id="new-password"
       class="form-control py-11"
       placeholder="Nouveau mot de passe"
       autocomplete="new-password">                        <span class="toggle-password position-absolute top-50 inset-inline-end-0 me-16 translate-middle-y ph ph-eye-slash" id="#new-password"></span>
                    </div>
                </div>
                <div class="col-12">
                    <label for="confirm-password" class="form-label mb-8 h6">Confirmer le mot de passe</label>
                    <div class="position-relative">
<input type="password" name="new_password_confirmation"
       class="form-control py-11"
       placeholder="Confirmer le mot de passe"
       autocomplete="new-password">                        <span class="toggle-password position-absolute top-50 inset-inline-end-0 me-16 translate-middle-y ph ph-eye-slash" id="#confirm-password"></span>
                    </div>
                </div>
                <div class="col-12">
                    <div class="flex-align justify-content-end gap-8">
                        <button type="reset" class="btn btn-outline-main bg-main-100 border-main-100 text-main-600 rounded-pill py-9">Annuler</button>
                        <button type="submit" class="btn btn-main rounded-pill py-9">Enregistrer</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

                </div>
                

                <!-- Billing Tab Start -->
               
                <!-- Notification Tab End -->

            </div>



    @endsection