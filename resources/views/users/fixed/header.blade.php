<header>
    @if (request()->url() === url('/bookingticket/show') || request()->url() === url('/webbusdetails/show'))
    <div class="booking-image-container">
    </div>
    @else
    <div class=" login-right-image col-md-12">
      <img id="icon" height="450" width="100%" alt="" style="width: 100%; margin:0px; position:absolute; z-index: 0; top: 0; left: 0;" src="{{ asset('frontend/assets/img') }}/home_bg.png" />
      <div style="color:rgba(0, 0, 0); display:flex; position:absolute; top:0;left:0; z-index: 1; height: 450; width: 100%; justify-content: center; align-items: center">
        <h1 style="font-size: 70px; margin-top: 150px; font-weight: bold; color: white">CCT</h1>
      </div>
    </div>
    @endif
</header>