@extends('layouts.app')

@section('title', 'DEMANDE DE DEVIS')
@section('content')


<!-- breadcumb-area -->

<div class="breadcumb-area">

</div>



<!-- beitor_contact_bg_area -->

<div class="beitor_contact_bg_area">

    <div class="container">

        <div class="row">

            <div class="col-lg-2 col-md-1 col-sm-12"></div>

            <div class="col-lg-8 col-md-10 col-sm-12">

                <div class="apartment5_area">

                    <div class="apartment_text text-center">

                        <h1>Demander un devis</h1>

                    </div>

                    <div class="witr_apartment_form contact_top">

                        <form action="{{route('contact.store')}}" method="post">

                            @csrf
                            <div class="witr_form_controls2">

                                <div class="witr_field2 ">

                                    <div class="witr_form_field2">
                                        <input type="text" name="name" class="@error('name')is-invalid
                                            @enderror" value="{{old('name')}}" placeholder=" Votre Nom*">
                                        @error('name')
                                        <div class="invalid-feedback d-block">
                                            {{$errors->first('name')}}
                                        </div>
                                        @enderror
                                    </div>

                                    <div class="witr_form_field2">
                                        <input type="text" name="phone"  class="@error('phone')is-invalid
                                        @enderror" value="{{old('phone')}}" placeholder="Votre Numero*">
                                        @error('phone')
                                        <div class="invalid-feedback d-block">
                                            {{$errors->first('phone')}}
                                        </div>
                                        @enderror
                                    </div>

                                </div>

                                <div class="witr_field2">
                                    <div class="witr_form_field2">
                                        <input type="email" name="email" class="@error('email')is-invalid
                                        @enderror" value="{{old('email')}}" placeholder="Votre Email*">
                                        @error('email')
                                        <div class="invalid-feedback d-block">
                                            {{$errors->first('email')}}
                                        </div>
                                        @enderror
                                    </div>

                                    <div class="witr_form_field2">
                                       <input type="text" name="subject" class="@error('subject')is-invalid
                                       @enderror" value="{{old('subject')}}" placeholder="Objet*">
                                       @error('subject')
                                       <div class="invalid-feedback d-block">
                                           {{$errors->first('subject')}}
                                       </div>
                                       @enderror
                                    </div>

                                </div>

                                <div class="witr_field2">
                                    <div class="witr_text_area2">
                                        <textarea name="comment" class="@error('comment')is-invalid
                                        @enderror" placeholder="De quoi avez vous besoin ?">{{old('comment')}}</textarea>
                                        @error('comment')
                                       <div class="invalid-feedback d-block">
                                           {{$errors->first('comment')}}
                                       </div>
                                       @enderror
                                    </div>

                                </div>

                                <div class="witr_field2">

                                    <div class="  witr_con_btn2">

                                        <button class=" w_btn2" type="submit">Envoyer</button>

                                    </div>

                                </div>

                            </div>

                        </form>

                    </div>

                </div>

            </div>

            <div class="col-lg-2 col-md-1 col-sm-12"></div>

        </div>

    </div>

</div>



<!-- beitor_sit_map_area -->

<div class="beitor_sit_map_area">

    <div class="containers">

        <div class="row">

            <div class="col-lg-12">

                <div class="map_area">

                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15889.669974952936!2d-3.9767399!3d5.353083!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x64fc7808da80dd7b!2sPharmacie%20de%20la%20Riviera%202!5e0!3m2!1sfr!2sci!4v1651148774871!5m2!1sfr!2sci"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection
