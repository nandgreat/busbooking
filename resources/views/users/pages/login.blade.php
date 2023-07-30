<style>

</style>

<script src='//fw-cdn.com/9640414/3411994.js' chat='true'>
</script>

<head>

  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <link href="{{asset('frontend')}}/css/styles.css" rel="stylesheet" />

  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <!------ Include the above in your HEAD tag ---------->
</head>

<body>
  <div class="row">

    <div class=" login-right-image col-md-12">
      <img id="icon" height="400" width="100%" alt="" style="width: 100%; margin:0px; position:absolute; z-index: 0; top: 0; left: 0;" src="{{ asset('frontend/assets/img') }}/auth_bg.png" />
      <div style="color:rgba(0, 0, 0); display:flex; position:absolute; top:0;left:0; z-index: 1; height: 400; width: 100%; justify-content: center; align-items: center">
        <h1 style="font-size: 70px; font-weight: bold; color: white">CCT</h1>
      </div>
    </div>
    <div class="container">


      <div class="row">

        <div class="col-md-6 offset-3" style="margin-top: 40px;">
          <form method="post" action="{{route('user.post.login')}}">
            @csrf
            <!-- Login Form -->
            <div class="row">


              @if ($message = Session::get('error'))
              <div class="col-md-12" role="alert">
                <div class="alert alert-danger mb-4" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close" data-dismiss="alert">
                      <line x1="18" y1="6" x2="6" y2="18"></line>
                      <line x1="6" y1="6" x2="18" y2="18"></line>
                    </svg></button>
                  {{$message}}
                </div>
              </div>
              @endif

              <div style="width: 100%;">
                <label class="mt-3" for="email">Email</label><br>
                <input type="email" id="email" autocomplete="off" class="fadeIn second" style="width: 100%;" name="email" placeholder="Enter  Email">
                <label class="mt-3" for="password">Password</label>
                <input type="password" id="password" style="width: 100%;" class="fadeIn third col-md-12 mt-sm-4" name="password" placeholder="password">
                <div class="card-body text-right mt-sm-6" style="font-size: 14px;"><a href="{{route('user.forgotpassword')}}">Forgot Password?</a></div>

              </div>
              <button type="submit" style="padding-top:15px; padding-bottom:15px;" class="btn btn-block btn-primary mt-sm-3 fadeIn fouth">LOGIN</button>
            </div>
            <br>
            <div class="border-top card-body text-center mt-sm-6">Need an account?<b> <a href="{{route('registration')}}">Sign up</a></b></div>
          </form>
        </div>
      </div>
    </div>

    <div class="col-md-12">
      <img height="500" width="100%" alt="" style="width: 100%; margin:0px; position:absolute; z-index: 0; top: 0; left: 0;" src="{{ asset('frontend/assets/img') }}/half_bus.png" />
    </div>

  </div>





</body>

@if($errors->any())
@foreach($errors->all() as $er)
<p class="alert alert-danger">{{$er}}</p>
@endforeach
@endif


<!-- Remind Passowrd -->


</div>
</div>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v14.0&appId=836525167002150&autoLogAppEvents=1" nonce="LJ1gB9sE"></script>