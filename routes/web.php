<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\BusController;
use App\Http\Controllers\Backend\HomeController;
use App\Http\Controllers\Backend\TripController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\RouteController;
use App\Http\Controllers\Backend\SeatController;
use App\Http\Controllers\Backend\DriverController;
use App\Http\Controllers\Backend\ReportController;
use App\Http\Controllers\Backend\BookingController;
use App\Http\Controllers\Backend\CounterController;
use App\Http\Controllers\Backend\PaymentController;
use App\Http\Controllers\Backend\AdminLoginController;
use App\Http\Controllers\Frontend\registrationcontroller;
use App\Http\Controllers\Frontend\ShowSeatInfoController;
use App\Http\Controllers\Frontend\bookingticketcontroller;
use App\Http\Controllers\Frontend\CustomerProfilecontroller;
use App\Http\Controllers\Frontend\DeliveryController;
use App\Http\Controllers\Frontend\ShowBookingInfoController;
use App\Http\Controllers\Frontend\UserPaymentController;







/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/admin/login', [AdminLoginController::class, 'login'])->name('admin.login');
Route::post('/admin/dologin', [AdminLoginController::class, 'dologin'])->name('admin.do.login');

Route::group(['middleware' => ['auth', 'admin']], function () {
    Route::get('/admin', [HomeController::class, 'admin'])->name('admin-dashboard');

    //  function(){
    // return view('admin.master');
    //  })->name('dashboard'); 
    Route::get('/admin/logout', [AdminLoginController::class, 'logout'])->name('admin.logout');
    Route::get('/admin/home', [HomeController::class, 'test']);
    Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard');
    //route for bus
    Route::get('/bus', [BusController::class, 'bus'])->name('bus');
    Route::get('/add/businfo', [BusController::class, 'addbusinfo'])->name('addbusinfo');
    Route::post('/businfo/store', [BusController::class, 'businfostore'])->name('businfo.store');
    Route::get('/bus/{id}/delete', [BusController::class, 'delete'])->name('bus.delete');
    Route::get('/bus/{id}/edit', [BusController::class, 'edit'])->name('bus.edit');
    Route::post('/bus/update', [BusController::class, 'update'])->name('bus.update');

    // route for counter
    Route::get('/counter/form', [CounterController::class, 'counter'])->name('counter.details');
    Route::get('/counter', [CounterController::class, 'counterdetails'])->name('counter');
    Route::post('/counter/store', [CounterController::class, 'counterstore'])->name('counter.store');

    //  route for driver
    Route::get('/driver/details', [DriverController::class, 'driver'])->name('driver.details');
    Route::get('/driver/form', [DriverController::class, 'driverform'])->name('driver.form');
    Route::post('/driver/store', [DriverController::class, 'driverstore'])->name('driver.store');

    // route for trip
    Route::get('/trip/details', [TripController::class, 'trip'])->name('trip.details');
    Route::get('/trip/form', [TripController::class, 'tripform'])->name('trip.form');
    Route::post('/trip/store', [TripController::class, 'tripstore'])->name('trip.store');

    //route for seat
    Route::get('/seat/details', [SeatController::class, 'seat'])->name('seat.details');
    Route::get('/add/seatinfo', [SeatController::class, 'addseatinfo'])->name('addseatinfo');
    Route::post('/store', [SeatController::class, 'store'])->name('store');
    Route::get('/seat/delete/{id}', [SeatController::class, 'seatdelete'])->name('seat.delete');


    //route for user
    Route::get('/userform', [UserController::class, 'userform'])->name('userform');


    //route for location
    Route::get('/routeform', [RouteController::class, 'routeform'])->name('routeform');
    Route::post('/routestore', [RouteController::class, 'routestore'])->name('routestore');
    Route::get('/routelist', [RouteController::class, 'routelist'])->name('routelist');

    //route for booking
    Route::get('/bookinginfo', [BookingController::class, 'bookinginfo'])->name('bookinginfo');
    Route::get('/booking/seat/release', [BookingController::class, 'bookingRelease'])->name('admin.booking.release');


    //route for payment
    Route::get('/paymentinfo', [PaymentController::class, 'payment'])->name('payment');



    //route for report
    Route::get('/report', [ReportController::class, 'report'])->name('reportlist');
});








//website

Route::get('/', function () {
    return view('users.pages.homepage');
})->name('frontend.user');

Route::get('/user/login/show', [registrationcontroller::class, 'loginshow'])->name('loginshow');
Route::post('/login/post', [registrationcontroller::class, 'loginPost'])->name('user.post.login');
Route::get('/forgotpassword', [registrationcontroller::class, 'forgotPassword'])->name('user.forgotpassword');
Route::post('/process-forgotpassword', [registrationcontroller::class, 'processForgotPassword'])->name('user.process.forgotpassword');
Route::get('/user/registration/show', [registrationcontroller::class, 'registrationshow'])->name('registration');
Route::post('/user/store', [registrationcontroller::class, 'userstore'])->name('user.store');
Route::get('/user/logout', [registrationcontroller::class, 'logout'])->name('user.logout');

// rpute for seat info
Route::get('/showseat/info/{id}/{date}', [ShowSeatInfocontroller::class, 'showseatinfo'])->name('showseat.info');



//route for webauth
Route::group(['middleware' => 'handle'], function () {

    // route for search bus
    Route::get('/bookingticket/show', [bookingticketcontroller::class, 'bookingshow'])->name('booking');
    Route::get('/webbusdetails/show', [bookingticketcontroller::class, 'webbusdetails'])->name('webbusdetails');
    Route::post('/webbusdetails/store', [bookingticketcontroller::class, 'webbusdetailsstore'])->name('webbusdetails.store');

    //route for booking
    Route::get('/check-in', [ShowBookingInfoController::class, 'checkInPage'])->name('user.book.checkin');
    Route::get('/delivery', [DeliveryController::class, 'deliveryPage'])->name('user.book.delivery');
    Route::post('/process-delivery-booking', [DeliveryController::class, 'processDelivery'])->name('process.delivery');
    Route::get('/delivery-status', [DeliveryController::class, 'deliveryStatus'])->name('user.book.delivery_status');
    Route::get('/reschedule-delivery', [DeliveryController::class, 'deliveryReschedule'])->name('user.reschedule.delivery');
    Route::get('/track-delivery', [DeliveryController::class, 'trackDelivery'])->name('user.track.delivery');
    Route::get('/delivery-history', [DeliveryController::class, 'deliveryHistory'])->name('user.book.delivery_history');
    Route::post('/delivery-status', [DeliveryController::class, 'checkDeliveryStatus'])->name('process.delivery_status');
    Route::get('/customer-service', [DeliveryController::class, 'customerService'])->name('user.book.customer_service');
    Route::get('/report-feedback', [DeliveryController::class, 'reportsAndFeedbacks'])->name('user.book.report_feedback');
    Route::post('/upload-documents', [ShowBookingInfoController::class, 'uploadTravelDocuments'])->name('booking.upload-documents');
    Route::get('/user/buy/ticket', [ShowSeatInfocontroller::class, 'bookTicket'])->name('user.book.ticket');
    Route::get('/showbooking/info', [ShowBookingInfoController::class, 'showbookinginfo'])->name('showbooking.info');
    Route::get('/showtripinfo/info', [ShowBookingInfoController::class, 'showTripInfo'])->name('showtrip.info');
    Route::get('/bookingsuccess', [ShowBookingInfoController::class, 'showBookingSuccess'])->name('booking.success');
    Route::get('/payment-page', [ShowBookingInfoController::class, 'showPaymentPage'])->name('booking.payment');
    Route::get('/booking-code-page', [ShowBookingInfoController::class, 'bookingCodePage'])->name('booking.bookingCode');
    Route::get('/installmentall-payment-page', [ShowBookingInfoController::class, 'showInstallmentalPaymentPage'])->name('booking.installmentalpayment');
    Route::post('/installmental-payment-code-page', [ShowBookingInfoController::class, 'showInstallmentalPaymentCodePage'])->name('booking.installmentPaymentCode');
    //route for print
    Route::get('/print/view{id}', [ShowBookingInfoController::class, 'viewinfo'])->name('view.info');

    //userpayment
    Route::get('user/payment/{id}', [UserPaymentController::class, 'userpayment'])->name('user.payment');
    Route::post('user/payment/post/{book_id}', [UserPaymentController::class, 'postPayment'])->name('user.payment.post');
});
