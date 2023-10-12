<div class="col-md-3" style="padding-top: 80px; margin-left:10px; padding-bottom: 80px; justify-content: center;  background-color:#A4B1D4; border-radius: 8px; margin-bottom: 100px; margin-top: 30px">

    <a href="{{route('user.book.delivery')}}">
        <div class="@if(Route::currentRouteName() === 'user.book.delivery') active-delivery-menu-item @else delivery-menu-item @endif">
            <h4 class="delivery-menu-text">Delivery</h4>
        </div>
    </a>
    <div class="delivery-menu-item">
        <h4 class="delivery-menu-text">Book Delivery</h4>
    </div>
    <a href="{{route('user.reschedule.delivery')}}">
        <div class="@if(Route::currentRouteName() === 'user.reschedule.delivery') active-delivery-menu-item @else delivery-menu-item @endif">
            <h4 class="delivery-menu-text">Reschedule Booking</h4>
        </div>
    </a>
    <a href="{{route('user.book.delivery_status')}}">
        <div class="@if(Route::currentRouteName() === 'user.book.delivery_status') active-delivery-menu-item @else delivery-menu-item @endif">
            <h4 class="delivery-menu-text">Booking Status</h4>
        </div>
    </a>
    <a href="{{route('user.book.delivery_history')}}">
        <div class="@if(Route::currentRouteName() === 'user.book.delivery_history') active-delivery-menu-item @else delivery-menu-item @endif">
            <h4 class="delivery-menu-text">Delivery History</h4>
        </div>
    </a>
    <a href="{{route('user.track.delivery')}}">
        <div class="@if(Route::currentRouteName() === 'user.track.delivery') active-delivery-menu-item @else delivery-menu-item @endif">
            <h4 class="delivery-menu-text">Track Delivery</h4>
        </div>
    </a>
    <a href="{{route('user.book.customer_service')}}">

        <div class="@if(Route::currentRouteName() === 'user.book.customer_service') active-delivery-menu-item @else delivery-menu-item @endif">
            <h4 class="delivery-menu-text">Customer Service</h4>
        </div>
    </a>
    <a href="{{route('user.book.report_feedback')}}">
        <div class="@if(Route::currentRouteName() === 'user.book.report_feedback') active-delivery-menu-item @else delivery-menu-item @endif">
            <h4 class="delivery-menu-text">Report & Feedback</h4>
        </div>
    </a>
    <div class="delivery-menu-item">
        <h4 class="delivery-menu-text">Settings</h4>
    </div>
</div>