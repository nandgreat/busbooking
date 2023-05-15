@extends('users.master')

@section('title', 'Dashboard')

@section('content_header')
<h1>Users</h1>
@stop

@section('content')

<div class="row">
    <div class="container">

        <div class="row">
            <div class="col-md-6" style="margin-top: 40px;">
                <h3 class="card-title">Welcome </h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est mollitia distinctio quisquam. Laborum voluptatum eos quibusdam ipsa reiciendis fuga dolorem. Quibusdam porro quae soluta facilis sint repudiandae voluptate laboriosam consequuntur.</p>
            </div>

            <div class="col-md-6">
                <div class="right-image"></div>
            </div>

        </div>
    </div>

</div>


@endsection

@section('myjsfile')
<!-- Styles -->
<script src="{{ asset('vendor/jquery/jquery.min.js') }}" defer></script>

<script src="{{ asset('js/main.js') }}" defer></script>

@stop