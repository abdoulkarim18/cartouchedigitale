@extends('layouts.admin')

@section('content')

<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">Ajouter une categorie</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Formulaire</a></li>
                                <li class="breadcrumb-item active">Ajouter une categorie</li>
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
                            <h4 class="card-title">Formulaire d'envois</h4>
                            <p class="card-title-desc">Ce formulaire est fait pour envoyer les differents Categories de services</p>
                        </div>
                        <div class="card-body p-4">
                            <div class="row mt-4">
                                <div class="col-lg-6">
                                    <form action="{{ route('admin.cat-services.store')}}" method="POST" class="row gx-3 gy-2 align-items-center">
                                       @csrf
                                        <div class="hstack gap-3">
                                            <input class="form-control me-auto @error('libelle')is-invalid
                                            @enderror" value="{{old('libelle')}}" type="text" placeholder="Ajouter une categorie service..." name="libelle">
                                            @error('libelle')
                                            <div class="invalid-feedback d-block">
                                                {{$errors->first('libelle')}}
                                            </div>
                                            @enderror
                                            <button type="submit" class="btn btn-secondary">Envoyer</button>
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
            <!-- End Form Layout -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Services Categories</h4>
                            <p class="card-title-desc">Table Listant Tous Les Categories Services</p>
                        </div>
                        <div class="card-body">

                            <div class="table-responsive">
                                <table class="table table-editable table-nowrap align-middle table-edits">
                                    <thead>
                                        <tr>

                                            <th>Categories Service </th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($catservices as $catservice)

                                            <tr data-id="1">

                                                <td>{{$catservice->libelle}}</td>

                                                <td style="width: 100px">
                                                    <a href="{{route('admin.cat-services.edit', $catservice)}}" class="btn btn-outline-secondary btn-sm edit" title="Editer">
                                                        <i class="fas fa-pencil-alt"></i>
                                                    </a>

                                                    <form action="{{route('admin.cat-services.destroy', $catservice)}}" method="POST" class="d-inline">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="btn btn-outline-danger btn-sm edit" onclick="return confirm('Êtes-vous sûr de bien vouloir supprimer ? Si OUI, Cette Action Est Irréverssible!')" title="Supprimer"><i class="fa fa-trash"></i></button></a>
                                                    </form>

                                                </td>
                                            </tr>
                                        @empty
                                            <p>Pas de categorie disponible</p>
                                        @endforelse
                                    </tbody>
                                    </table>
                            </div>

                        </div>
                    </div>
                </div> <!-- end col -->
            </div>
        </div>
        <!-- container-fluid -->

    @include('partials.admin.footer')
</div>
@endsection
