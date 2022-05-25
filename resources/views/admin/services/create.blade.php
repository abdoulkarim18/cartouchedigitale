@extends('layouts.admin')

@section('content')

<div class="main-content">

<form action="{{ route('admin.services.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
    <div class="page-content">

        @include('admin.services.field')

         <div class="text-center my-2">
            <button type="submit" class="btn btn-primary waves-effect waves-light">Envoyer</button>
        </div>
    </div>
</form>
    <!-- End Page-content -->

    @include('partials.admin.footer')
</div>
@endsection
