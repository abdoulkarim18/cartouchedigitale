@extends('layouts.admin')

@section('content')

<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">Modifier une categorie</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Formulaire</a></li>
                                <li class="breadcrumb-item active">Modifier une categorie</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Formulaire de modification</h4>
                            <p class="card-title-desc">Ce formulaire est fait pour modifier les differents Categories de services</p>
                        </div>
                        <div class="card-body p-4">
                            <div class="row mt-4">
                                <div class="col-lg-6">
                                    <form action="{{ route('admin.cat-services.update', $catservice)}}" method="POST" class="row gx-3 gy-2 align-items-center">
                                        @csrf
                                        @method('PATCH')
                                        <div class="hstack gap-3">
                                            <input class="form-control me-auto @error('libelle')is-invalid
                                            @enderror" value="{{old('libelle') ?? $catservice->libelle}}" type="text" placeholder="Ajouter une categorie service..." name="libelle">
                                            @error('libelle')
                                            <div class="invalid-feedback d-block">
                                                {{$errors->first('libelle')}}
                                            </div>
                                            @enderror
                                            <button type="submit" class="btn btn-secondary">Modifier</button>
                                            <div class="vr"></div>
                                            <button type="reset" class="btn btn-outline-danger">Réinitialiser</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- container-fluid -->

    @include('partials.admin.footer')
</div>
@endsection
