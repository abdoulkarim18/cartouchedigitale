<div class="container-fluid">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">Formulaire d'envois</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Formulaire</a></li>
                        <li class="breadcrumb-item active">Formulaire d'envois</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    
    <!-- end page title -->

    <div class="row">
        <div class="col-lg-12">
            <div class="form-group mb-3">
                <label>Titre</label>
                <input type="text" class="form-control @error('title')is-invalid
                @enderror" value="{{old('title') ?? $service->title}}" name="title" placeholder="Votre Titre" />
                @error('title')
                <div class="invalid-feedback d-block">
                    {{$errors->first('title')}}
                </div>
                @enderror
            </div>
        </div>
        <div class="col-lg-12">
            <div class="form-group mb-3">
                <select name="cat_service_id" class="form-select">
                    <option>-- select option --</option>
                    @forelse($cats as $cat)
                    <option value="{{$cat->id}}">{{$cat->libelle}}</option>
                    @empty
                    deddes
                    @endforelse
                </select>
                @error('cat_service_id')
                <div class="invalid-feedback d-block">
                    {{$errors->first('cat_service_id')}}
                </div>
                @enderror
            </div>
        </div>

            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Images</h4>
                        <p class="card-title-desc">Uploader une image ici
                        </p>
                    </div>
                    <div class="card-body">
                        <div>
                            <div class="fallback">
                                <input name="file" value="{{old('file') ?? $service->file}}" type="file" class='form-control @error('title')is-invalid
                                @enderror'>
                                @error('file')
                                <div class="invalid-feedback d-block">
                                    {{$errors->first('file')}}
                                </div>
                                @enderror
                            </div>

                        </div>
                    </div>
                </div>
            </div> <!-- end col -->


        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Description</h4>
                    <p class="card-title-desc">Faite la description de l'article ici</p>
                </div>
                <div class="card-body">
                    <div>
                        <textarea name="description" class=" @error('title')is-invalid
                        @enderror" id="ckeditor-classic">{{old('description') ?? $service->description}}</textarea>
                        @error('description')
                            <div class="invalid-feedback d-block">
                                {{$errors->first('description')}}
                            </div>
                        @enderror
                    </div>
                </div>
            </div>
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->

</div>
