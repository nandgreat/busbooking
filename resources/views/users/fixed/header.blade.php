<header>
    @if (request()->url() === url('/bookingticket/show') || request()->url() === url('/webbusdetails/show'))
    <div class="booking-image-container">
    </div>
    @else
    <div class="image-container">
    </div>
    @endif
</header>