@extends('themeadmin')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header border-bottom border-gray-100 flex-align gap-8">
            <h5 class="mb-0">Ajouter intérêt</h5>        
            <button type="button" class="text-main-600 text-md d-flex" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Course Details">
                <i class="ph-fill ph-question"></i>
            </button>
        </div>

        <div class="card-body">
            <form action="addinterest" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row gy-20">
                    <input type="hidden" name="etudiant_id" class="form-control me-2" value="{{Auth::user()->id}}" placeholder="votre intérêt" required>

                    <div class="col-xxl-9 col-md-8 col-sm-7">
                        <div class="row g-20">
                            <div class="col-sm-12">
                                <label class="h5 mb-8 fw-semibold font-heading">intérêt</label>
                                <div id="interest-wrapper">
                                    <div class="d-flex mb-2 interest-input-group">
                                        <input type="text" name="nom[]" class="form-control me-2" placeholder="votre intérêt" required>
                                        <button type="button" class="btn btn-success btn-sm add-interest">+</button>
                                    </div>
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

<style>

</style>


    
@endsection


<script>
    document.addEventListener("DOMContentLoaded", function () {
        const wrapper = document.getElementById("interest-wrapper");

        wrapper.addEventListener("click", function (e) {
            if (e.target && e.target.classList.contains("add-interest")) {
                const newInputGroup = document.createElement("div");
                newInputGroup.classList.add("d-flex", "mb-2", "interest-input-group");

                newInputGroup.innerHTML = `
                    <input type="text" name="nom[]" class="form-control me-2" placeholder="votre intérêt" required>
                    <button type="button" class="btn btn-danger btn-sm remove-interest">-</button>
                `;
                wrapper.appendChild(newInputGroup);
            } else if (e.target && e.target.classList.contains("remove-interest")) {
                e.target.parentElement.remove();
            }
        });
    });
</script>