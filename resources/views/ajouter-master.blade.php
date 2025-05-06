@extends('themeadmin')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header border-bottom border-gray-100 flex-align gap-8">
            <h5 class="mb-0">Ajouter Master</h5>        
            <button type="button" class="text-main-600 text-md d-flex" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Course Details">
                <i class="ph-fill ph-question"></i>
            </button>
        </div>

        <div class="card-body">
            <form action="addmaster" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row gy-20">
                    <div class="col-xxl-3 col-md-4 col-sm-5">
                        <div class="mb-20">
                            <label class="h5 fw-semibold font-heading mb-0">
                                Image <span class="text-13 text-gray-400 fw-medium">(Required)</span>
                            </label>
                        </div>

                        <div>
                            <div class="upload-area" id="uploadArea" onclick="document.getElementById('photoInput').click()">
                                <i class="ph-bold ph-image"></i>
                                <p>Choisir une image</p>
                            </div>
                            <input type="file" id="photoInput" name="photo" accept="image/*" required style="display: none;">
                        </div>
                    </div>

                    <div class="col-xxl-9 col-md-8 col-sm-7">
                        <div class="row g-20">
                            <div class="col-sm-12">
                                <label class="h5 mb-8 fw-semibold font-heading">Détails de Master</label>
                            </div>

                            <div class="col-sm-6">
                                <label for="type" class="h5 mb-8 fw-semibold font-heading">Type</label>
                                <div class="position-relative">
                                    <select name="type" id="type" class="form-select py-9 placeholder-13 text-15" required>
                                        <option value="Mastère professionnel">Mastère professionnel</option>
                                        <option value="Mastère de recherche">Mastère de recherche</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <label for="name" class="h5 mb-8 fw-semibold font-heading">Nom</label>
                                <div class="position-relative">
                                    <input type="text" name="nom" id="name" class="text-counter placeholder-13 form-control py-11 pe-76" maxlength="100" placeholder="Nom du Master" required>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="flex-align justify-content-end gap-8 mt-4">
                        <a href="#" class="btn btn-outline-main rounded-pill py-9">Annuler</a>
                        <button type="submit" class="btn btn-main rounded-pill py-9">Ajouter</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Custom CSS for upload button -->
<style>
.upload-label {
    cursor: pointer;
}
.upload-area {
    padding: 20px;
    border: 2px dashed #ccc;
    text-align: center;
    border-radius: 8px;
    background-color: #f9f9f9;
}
.upload-area i {
    font-size: 32px;
    color: #888;
}
#preview img {
    margin-top: 10px;
    width: 100%;
    max-height: 200px;
    object-fit: cover;
    border-radius: 8px;
}
</style>

<script>
    const input = document.getElementById('photoInput');
    const uploadArea = document.getElementById('uploadArea');

    input.addEventListener('change', function() {
        uploadArea.innerHTML = ''; // Clear the upload area

        const file = this.files[0];
        if (file) {
            const reader = new FileReader();

            reader.onload = function(e) {
                const img = document.createElement('img');
                img.src = e.target.result;
                img.style.width = '100%'; // fill the area
                img.style.height = 'auto';
                img.style.objectFit = 'cover'; // nicely fill without distortion
                uploadArea.appendChild(img);
            }

            reader.readAsDataURL(file);
        }
    });
</script>
    
@endsection
