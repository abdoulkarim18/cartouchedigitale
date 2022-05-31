@extends('layouts.admin')

@section('content')

<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">Ajouter Un Service</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a class='btn btn-primary text-white' href="{{route('admin.services.create')}}">Publier un service</a></li>

                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Services</h4>
                            <p class="card-title-desc">Table Listant Tous Les Services</p>
                        </div>
                        <div class="card-body">

                            <div class="table-responsive">
                                <table class="table table-editable table-nowrap align-middle table-edits">
                                    <thead>
                                        <tr>

                                            <th>Services</th>
                                            <th>Description</th>
                                            <th>Categories</th>
                                            <th>Image</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($services as $service)

                                            <tr data-id="1">
                                                <td >{{$service->title}}</td>
                                                <td>{!! Str::substr($service->description, 0, 25).' ...' !!}
                                                </td>
                                                <td>{{$service->cat_service->libelle}}</td>

                                                <td data-field="image">
                                                    <figure class="figure">
                                                        <img src="{{ asset($service->file) }}" alt="Image" class="img-fluid" width="90">
                                                    </figure>
                                                </td>

                                                <td style="width: 100px">
                                                    <a href="{{ route('admin.services.edit', $service)}}" class="btn btn-outline-secondary btn-sm edit" title="Edit">
                                                        <i class="fas fa-pencil-alt"></i>
                                                    </a>

                                                    <form action="{{ route('admin.services.destroy', $service)}}" method="POST" class="d-inline">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="btn btn-outline-danger btn-sm edit" onclick="return confirm('Êtes-vous sûr?')" title="Supprimer"><i class="fa fa-trash"></i></button></a>
                                                    </form>

                                                </td>
                                            </tr>
                                        @empty
                                            <p>Pas d'annonce disponible</p>
                                        @endforelse
                                    </tbody>
                                    </table>
                            </div>

                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->

        </div> <!-- container-fluid -->
    </div>
    <!-- End Page-content -->


    @include('partials.admin.footer')
</div>
@endsection
