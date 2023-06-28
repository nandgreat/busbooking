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
    <div class="container">

      <div class="main-bg">

      </div>

      <div class="row">
        <div class="col-md-5" style="margin-top: 40px;">
          <form method="post" action="{{route('user.store')}}">
            @csrf
            <!-- Login Form -->
            <div class="row">

              <div style="margin-bottom: 120px">
                <p style="font-size: 50px; font-weight: bold; color: #102983">Create Account</p>
                <div class="row">
                  <div class="col-sm-5">
                    <hr style="height: 4px; background-color: #102983;">
                  </div>
                </div>
              </div>

              @if($errors->any())
              <div class="alert alert-danger col-md-12">
                <ul>
                  @foreach($errors->all() as $error)
                  <li>{{ $error }}</li>
                  @endforeach
                </ul>
              </div>
              @endif


              @if(session()->has('message'))
              <p class="alert alert-success col-md-12">{{session()->get('message')}}</p>
              @endif


              @csrf
              <input type="text" id="first_name" class="form-control" placeholder="First Name" name='first_name' autofocus="">

              <label class="mt-3" for="last_name">Last Name</label>
              <input type="text" id="last_name" class="form-control" placeholder="Last Name" name='last_name' autofocus="">
              <label class="mt-3" for="email">Email address</label>
              <input type="email" id="email" class="form-control" placeholder="Email address" name='email' autofocus="">
              <label class="mt-3" for="phone">Contact</label>
              <input type="phone" id="phone" class="form-control" placeholder="Contact" name='phone' autofocus="">
              <label class="mt-3" for="password">Password</label>
              <input type="password" id="password" class="form-control" placeholder="Password" name="password">
              <div class="checkbox mb-3">
              </div>
              <button class="w-100 btn btn-lg btn-primary mt-4" type="submit">Sign Up</button>
            </div>
          </form>


          <br>
          <div class="border-top card-body text-center mt-sm-6">Already have an account? <a href="{{route('loginshow')}}">Login</a></div>
        </div>

        <div class="col-md-7">
          <div class="login-right-image"></div>
        </div>

      </div>
    </div>

  </div>

</body>

<!-- Remind Passowrd -->


</div>
</div>