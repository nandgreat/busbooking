<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link href="{{asset('frontend')}}/css/styles.css" rel="stylesheet" />

<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->


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



  <div id='tawk_60670636f7ce182709367545'></div>
  <!--Start of Tawk.to Script-->
  <script type="text/javascript">
    var Tawk_API = Tawk_API || {},
      Tawk_LoadStart = new Date();
    Tawk_API.embedded = 'tawk_60670636f7ce182709367545';
    (function() {
      var s1 = document.createElement("script"),
        s0 = document.getElementsByTagName("script")[0];
      s1.async = true;
      s1.src = 'https://embed.tawk.to/60670636f7ce182709367545/1h41a5nrg';
      s1.charset = 'UTF-8';
      s1.setAttribute('crossorigin', '*');
      s0.parentNode.insertBefore(s1, s0);
    })();
  </script>
  <!--End of Tawk.to Script-->


</body>

<!-- Remind Passowrd -->


</div>
</div>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v14.0&appId=836525167002150&autoLogAppEvents=1" nonce="LJ1gB9sE"></script>