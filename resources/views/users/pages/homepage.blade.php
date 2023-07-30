@extends('users.master')

@section('title', 'Dashboard')

@section('content_header')
<h1>Users</h1>
@stop

@section('content')

<div class="row">
    <div class="container">

        <div class="row">
            <div class="col-md-4" style="margin-top: 40px;">
                <h3 class="card-title text-center">ABOUT CCT </h3>
                <p class="text-center">Lorem simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
            </div>

            <div class="col-md-8">
                <div class="right-image"></div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="second-section-image col-md-12">
        <img id="icon" height="450" width="100%" alt="" style="width: 100%; margin:0px; position:absolute; z-index: 0; top: 0; left: 0;" src="{{ asset('frontend/assets/img') }}/second_section_img.png" />
        <div style="color:rgba(0, 0, 0); display:flex; position:absolute; top:0;left:0; z-index: 1; height: 450; width: 100%; justify-content: center; align-items: center">
        </div>
    </div>
</div>

@endsection

@section('myjsfile')
<!-- Styles -->
<script src="{{ asset('vendor/jquery/jquery.min.js') }}" defer></script>

<script src="{{ asset('js/main.js') }}" defer></script>

@stop