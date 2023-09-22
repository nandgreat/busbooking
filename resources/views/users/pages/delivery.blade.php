@extends('users.master')

@section('title', 'Dashboard')

@section('content_header')
<h1>Users</h1>
@stop

@section('content')

<div class="row">

    <div class="row" style="width: 100%;">
        <div class="col-md-10 offset-1" style="margin-top: 40px;">
            <!--Card-->
            <!--Card-Body-->
            <div class="card-body">
                <!--Card-Title-->
                <div class="icons text-left">

                    <p class="searchText" style="font-size: 30px;"><strong>Delivery Page</strong></p>

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

                    <div class="row" style="width: 100%;">
                        <div class="col-md-1" style=" padding-top: 80px; padding-bottom: 80px; justify-content: center;  background-color:#A4B1D4; border-radius: 8px; margin-bottom: 100px; margin-top: 30px">
                            <div class="delivery-menu-icon">
                                <input type="hidden" id="deliveryMenu" value="">

                                <img id="icon" width="30" alt="" style="width: 30; margin-bottom:0px" src="{{ asset('frontend/assets/img') }}/card_location.png" />
                            </div>
                            <div class="delivery-menu-icon">
                                <img id="icon" width="30" alt="" style="width: 30; margin-bottom:0px" src="{{ asset('frontend/assets/img') }}/delivery.png" />
                            </div>
                            <div class="delivery-menu-icon">
                                <img id="icon" width="30" alt="" style="width: 30; margin-bottom:0px" src="{{ asset('frontend/assets/img') }}/card_location.png" />
                            </div>
                            <div class="delivery-menu-icon">
                                <img id="icon" width="30" alt="" style="width: 30; margin-bottom:0px" src="{{ asset('frontend/assets/img') }}/store.png" />
                            </div>
                            <div class="delivery-menu-icon">
                                <img id="icon" width="30" alt="" style="width: 30; margin-bottom:0px" src="{{ asset('frontend/assets/img') }}/todo_list.png" />
                            </div>
                            <div class="delivery-menu-icon">
                                <img id="icon" width="30" alt="" style="width: 30; margin-bottom:0px" src="{{ asset('frontend/assets/img') }}/card_location.png" />
                            </div>
                            <div class="delivery-menu-icon">
                                <img id="icon" width="30" alt="" style="width: 30; margin-bottom:0px" src="{{ asset('frontend/assets/img') }}/support.png" />
                            </div>
                            <div class="delivery-menu-icon">
                                <img id="icon" width="30" alt="" style="width: 30; margin-bottom:0px" src="{{ asset('frontend/assets/img') }}/comment_quote.png" />
                            </div>
                            <div class="delivery-menu-icon">
                                <img id="icon" width="30" alt="" style="width: 30; margin-bottom:0px" src="{{ asset('frontend/assets/img') }}/cog.png" />
                            </div>
                        </div>
                        @include('users.fixed.delivery_menu')



                        <div class="col-md-7" style="padding-top: 80px; margin-left:20px; padding-right: 40px; padding-left: 40px; padding-bottom: 80px; justify-content: center;  background-color:#A4B1D4; border-radius: 8px; margin-bottom: 100px; margin-top: 30px">

                            @if ($message = Session::get('success'))
                            <div class="container">

                                <div class="success-main-bg">
                                    <div style="justify-content: flex-start; flex-direction: column;  display: flex; text-align: center; align-items: center;">
                                        <div class="check_img"></div>
                                        <p style="font-size: 30px; font-weight: bold; color: white">Payment Successfull</p>
                                        <p style="color: white">Your booking is confirmed. Check your mail for receipt and travel details</p>
                                        @if ($delivery = Session::get('delivery'))
                                        <h4 style="color: white">Booking Code: {{$delivery}}</h4>
                                        @endif
                                        <a class="btn btn-primary" style="padding: 10px; background-color:#102983" href="{{route('user.book.delivery')}}" role="button">Book Another Delivery</a>

                                    </div>
                                </div>

                            </div>
                            @else
                            <form action="{{route('process.delivery')}}" method="POST">
                                @csrf
                                <div id="bookDeliveryDiv">


                                    <div class="form-group">
                                        <label for="inputField" style="font-size: larger; font-weight: bold; color:#005DA3;">Pickup Location</label>
                                        <input type="text" name="delivery_from" class="form-control border-bottom border-primary transparent-input" style="background-color: transparent; " id="inputField" placeholder="Enter Delivery From">
                                    </div>

                                    <div class="form-group">
                                        <label for="inputField" style="font-size: larger; font-weight: bold; color:#005DA3;">Delivery To</label>
                                        <input type="text" name="delivery_to" class="form-control border-bottom border-primary transparent-input" style="background-color: transparent; " id="inputField" placeholder="Enter Delivery To">
                                    </div>

                                    <div class="form-group" style="margin-bottom: 50px;">
                                        <label for="inputField" style="font-size: larger; font-weight: bold; color:#005DA3;">Delivery Date</label>
                                        <input type="date" name="delivery_date" class="form-control border-bottom border-primary transparent-input" style="background-color: transparent; " id="inputField" placeholder="Enter Delivery Date">
                                    </div>

                                    <div class="form-group">
                                        <label for="inputField" style="font-size: larger; font-weight: bold; color:#005DA3;">Receiver Name</label>
                                        <input type="text" name="receiver_name" class="form-control border-bottom border-primary transparent-input" style="background-color: transparent; " id="inputField" placeholder="Enter Receiver Name">
                                    </div>

                                    <div class="form-group">
                                        <label for="inputField" style="font-size: larger; font-weight: bold; color:#005DA3;">Receiver Phone</label>
                                        <input type="tel" name="receiver_phone" class="form-control border-bottom border-primary transparent-input" style="background-color: transparent; " id="inputField" placeholder="Enter Receiver Phone">
                                    </div>

                                    <div class="form-group">
                                        <label for="inputField" style="font-size: larger; font-weight: bold; color:#005DA3;">Delivery Item</label>
                                        <input type="text" name="delivery_item" class="form-control border-bottom border-primary transparent-input" style="background-color: transparent; " id="inputField" placeholder="Delivery Item">
                                    </div>


                                    <button type="button" style="padding-top:15px; padding-bottom:15px; background-color:#fff; color:#005DA3" onclick="showPaymentDiv()" class="btn btn-block btn-primary mt-sm-3 fadeIn fouth">PROCEED</button>
                                </div>


                                <div id="paymentDiv" class="mb-4 mt-4" style="display: none;">

                                    <div class="form-group" style="display: flex; align-items: center; width: 100%; justify-content:center">
                                        <h5 style="font-size: larger; font-weight: bold; color:#005DA3;">Required payment: $113.00</h5>
                                    </div>

                                    <div class="form-group text-center">
                                        <label for="inputField" style="font-size: larger; color:#005DA3;">How would you like to pay</label>
                                    </div>

                                    <div class="row" style="justify-content: center;">
                                        <div class="row" style="justify-content: center; width: 100%;padding-top: 30px; padding-bottom:50px">
                                            <div class="row col-md-6">
                                                <div class="col-md-4 payment-paypal-logos"> </div>
                                                <div class="col-md-4 payment-mastercard-logos"> </div>
                                                <div class="col-md-4 payment-visa-logos"> </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group" style="display: flex; align-items: center; width: 100%; justify-content:center">
                                        <h5 style="font-size: larger; font-weight: bold; color:#005DA3;">Payment Details</h5>
                                    </div>
                                    <div class="form-group">
                                        <h5 style="font-size: larger; font-weight: bold; color:#005DA3;">Name on Card</h5>
                                        <input type="text" name="card_name" class="form-control border-bottom border-primary" id="inputField" placeholder="Enter Name on Card">
                                    </div>

                                    <div class="form-group">
                                        <label for="inputField" style="font-size: larger; font-weight: bold; color:#005DA3;">Card Number</label>
                                        <input type="number" minlength="16" maxlength="19" name="card_number" class="form-control border-bottom border-primary " id="inputField" placeholder="Enter Card Number">
                                    </div>

                                    <div class="form-group">
                                        <label for="inputField" style="font-size: larger; font-weight: bold; color:#005DA3;">Expiry Date</label>
                                        <input type="date" name="expiry_date" class="form-control border-bottom border-primary " id="inputField" placeholder="Enter Expiry Date">
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="inputField" style="font-size: larger; font-weight: bold; color:#005DA3;">CVC</label>
                                        <input type="number" name="cvc" class="form-control border-bottom border-primary " id="inputField" placeholder="Enter CVC">
                                    </div>

                                    <button type="submit" style="padding-top:15px; padding-bottom:15px; background-color:#fff; color:#005DA3; margin-top:30px" onclick="showPaymentDiv()" class="btn btn-block btn-primary mt-sm-3 mt-3 fadeIn fouth">MAKE PAYMENT</button>
                                </div>
                            </form>
                            @endif
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>

</div>

</div>


@endsection

@section('myjsfile')
<!-- Styles -->
<script src="{{ asset('frontend/js/jquery.min.js') }}" defer></script>

<!-- <script src="{{ asset('js/main.js') }}" defer></script> -->

<script>
    function showPaymentDiv() {
        var bookDeliveryDiv = document.getElementById("bookDeliveryDiv").style.display = "none";
        var x = document.getElementById("paymentDiv").style.display = "block";
    }
</script>

@stop
<style>
    * {
        box-sizing: border-box;
    }

    body {
        margin: 0;
        font-family: Arial, Helvetica, sans-serif;
    }

    .header {
        overflow: hidden;
        background-color: #f1f1f1;
        padding: 20px 10px;
    }

    .header a {
        float: left;
        color: black;
        text-align: center;
        padding: 2px;
        text-decoration: none;
        font-size: 18px;
        line-height: 25px;
        border-radius: 4px;
    }

    .header a.logo {
        font-size: 25px;
        font-weight: bold;
    }

    .header a:hover {
        background-color: #ddd;
        color: black;
    }

    .active-delivery-menu-item {
        display: flex;
        background-color: white;
        padding: 10px;
        border-radius: 8px;
        justify-content: flex-start;
        margin-left: 10px;
        margin-bottom: 40px;
        align-items: center;
    }

    .header a.active {
        background-color: dodgerblue;
        color: white;
    }

    .header-right {
        float: right;
    }

    @media screen and (max-width: 500px) {
        .header a {
            float: none;
            display: block;
            text-align: left;
        }

        .header-right {
            float: none;
        }
    }

    .card {
        margin: auto;
        border: solid 1px #dbdad7;
        width: 40%;
        padding-left: 10px !important;
        padding-bottom: 10px !important;
        padding-right: 10px !important;
        padding-top: 0px !important
    }

    .card-title {
        margin: auto;
        padding: 15px;
        background-color: #2f7fad;
        color: white;
        width: 80%
    }

    .delivery-menu-item {
        display: flex;
        justify-content: flex-start;
        margin-left: 20px;
        margin-bottom: 40px;
        align-items: center;
    }

    div.card-body {
        padding: 0px
    }

    .custom-select {
        width: 100%
    }

    .delivery-menu-text {
        color: #005DA3;
        font-weight: bold;
    }

    .btn2 {
        margin-left: 10%
    }

    input {
        outline: 0 !important;
        border-width: 0 0 2px !important;
        border-color: #d1d1cf !important
    }

    input:focus {
        border-color: #d1d1cf !important;
        -webkit-box-shadow: none !important;
        box-shadow: none !important
    }

    select {
        outline: 0 !important;
        border-width: 0 0 2px !important;
        border-color: #d1d1cf !important
    }

    .delivery-menu-icon {
        display: flex;
        justify-content: center;
        margin-bottom: 50px;
        margin-top: 10px;
        align-items: center;
    }

    select:focus {
        border-color: #d1d1cf !important;
        -webkit-box-shadow: none !important;
        box-shadow: none !important
    }

    .radiobtn {
        margin-left: 3.5%
    }

    .transparent-input {
        background-color: transparent;
        border: none;
        border-bottom: 1px solid #ccc;
        /* You can adjust the border style as needed */
    }

    .icons {
        margin: auto !important
    }

    .fa {
        border-radius: 25px;
        width: 10%;
        margin-left: 5%;
        border: solid 2px #dbdad7;
        margin-top: 5%;
        text-align: center
    }

    .fa-plane {
        color: #1cad9f
    }

    .fa-taxi {
        color: #c2f700
    }

    .fa-train {
        color: red
    }

    @media only screen and (max-width: 600px) {
        .card {
            margin: auto;
            border: solid 1px #dbdad7;
            width: 90%;
            padding-left: 10px !important;
            padding-bottom: 10px !important;
            padding-right: 10px !important;
            padding-top: 0px !important
        }

        .fa {
            border-radius: 25px;
            width: 15%;
            margin-left: 5%;
            border: solid 2px #dbdad7;
            margin-top: 5%;
            text-align: center
        }
    }
</style>