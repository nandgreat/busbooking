<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link href="{{asset('frontend')}}/css/styles.css" rel="stylesheet" />

<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<body>
  <!-- Messenger Chat Plugin Code -->
  <div id="fb-root"></div>

  <!-- Your Chat Plugin code -->
  <div id="fb-customer-chat" class="fb-customerchat">
  </div>

  <script>
    var chatbox = document.getElementById('fb-customer-chat');
    chatbox.setAttribute("page_id", "332552956857823");
    chatbox.setAttribute("attribution", "biz_inbox");
  </script>

  <!-- Your SDK code -->
  <script>
    window.fbAsyncInit = function() {
      FB.init({
        xfbml: true,

        version: 'v17.0'
      });
    };

    (function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s);
      js.id = id;
      js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js#xfbml=1&version=v17.0&autoLogAppEvents=1';;
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
  </script>

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

                <form method="post" action="{{route('user.store')}}">
                  @csrf
                  <!-- Login Form -->
                  <div class="row">


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
                    <label class="mt-3" for="first_name">Full Name</label>
                    <input type="text" id="first_name" placeholder="First Name" class="fadeIn first col-md-12" name='first_name' autofocus="">
                    <label class="mt-3" for="email">Email address</label>
                    <input type="email" id="email" placeholder="Email address" class="fadeIn first col-md-12" name='email' autofocus="">
                    <label class="mt-3" for="first_name">Password</label>
                    <input type="number" id="phone" placeholder="Contact" class="fadeIn first col-md-12" name='phone' autocomplete="off" autofocus="">
                    <label class="mt-3" for="first_name">Confirm Password</label>
                    <input type="password" id="password" placeholder="Password" class="fadeIn first col-md-12" name="password">
                    <div class="checkbox mb-3">
                    </div>
                    <button class="w-100 btn btn-lg btn-primary mt-4" type="submit">CREATE ACCOUNT</button>
                  </div>
                </form>


              </div>
            </div>
            <br>
            <div class="border-top card-body text-center mt-sm-6">Already have an account?<b><br> <a href="{{route('loginshow')}}">Login</a></b></div>
          </form>


        </div>
      </div>
    </div>

    <div class="col-md-12">
      <img height="500" width="100%" alt="" style="width: 100%; margin:0px; position:absolute; z-index: 0; top: 0; left: 0;" src="{{ asset('frontend/assets/img') }}/half_bus.png" />
    </div>

  </div>








</body>

<!-- Remind Passowrd -->


</div>
</div>