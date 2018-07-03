<?php

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



Route::get('/', function () {
    return view('index')->with('page', 'home');
});

Route::get('/whitepaper', function () {
    return view('whitepaper')->with('page', 'whitepaper');
});

Route::get('/register', function () {
    return view('auth.register')->with('page', 'register');
});

Route::get('/register/{username}', 'Auth\RegisterController@registerReferrer');

Route::get('/contact', function () {
    return view('contact')->with('page', 'contact');
});

Route::get('/compensation', function () {
    return view('compensation')->with('page', 'compensation');
});

Route::get('/user/verify/{token}', 'Auth\RegisterController@verifyUser');

Route::post('/verifyTransaction', 'TransactionsController@verifyPayment')->name('verifyTransactionRef');

//*******************************ADMIN ROUTES***********************/

Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function (){

    Route::get('/home', 'AdminController@index')->name('adminHome');
    Route::get('/creditVoucher', 'AdminController@creditVoucher')->name('creditVoucher');
    Route::post('/creditVoucher', 'AdminController@postVoucher')->name('postVoucher');
    Route::post('/credited', 'VoucherSalesController@credited')->name('credited');

//    members
    Route::get('/members', 'MemberController@index')->name('adminAllMembers');
    Route::get('/members/{member}', 'MemberController@show')->name('adminMemberDetails');
    Route::post('/sendmail', 'AdminController@sendMail')->name('sendMail');
    Route::get('/mailbox', 'AdminController@mailBox')->name('mailBox');
    Route::get('/sendonemail/{email}', 'AdminController@sendOneMail')->name('sendOneMail');
    Route::post('/sendonemail', 'AdminController@postOneMail')->name('postOneMail');

    Route::get('/createAgent', 'AdminController@createAgent')->name('createAgent');
    Route::post('/createAgent', 'AdminController@saveAgent')->name('postAgent');
    Route::get('/agents', 'AdminController@allAgent')->name('allAgents');
    Route::get('/agents/credit/{agent}', 'AdminController@creditAgent')->name('creditAgent');
    Route::post('/agents/credit', 'PaymentController@creditPayAgent')->name('creditPayAgent');
    Route::get('/credited', 'VoucherSalesController@index')->name('credited');

});



//*******************************AGENTS ROUTES***********************/

Route::group(['prefix' => 'agent', 'middleware' => 'agents'], function (){

    Route::get('/home', 'AgentController@index')->name('agentHome');
    Route::get('/creditVoucher', 'AgentController@creditVoucher')->name('agentCreditVoucher');
    Route::post('/creditVoucher', 'AgentController@postVoucher')->name('agentPostVoucher');
    Route::get('/creditVoucherPay', 'AgentController@agentVoucherPayment')->name('agentVoucherPayment');

//    members
    Route::get('/members', 'AgentController@members')->name('agentAllMembers');
    Route::get('/members/{member}', 'AgentController@show')->name('agentMemberDetails');
    Route::get('/sales', 'AgentController@sales')->name('agentSales');

});


Route::group(['prefix' => 'members', 'middleware' => 'members'], function (){

    Route::get('/referrals', 'ReferralController@index')->name('myReferrals');
    Route::get('/bonus', 'ReferralController@referralBonus')->name('myReferralBonus');

//    members
//    Route::get('/members', 'MemberController@index')->name('adminAllMembers');

});

Auth::routes();

Route::get('/home', 'HomeController@getBonus')->name('home');

Route::get('/verify/{token}', 'verifyController@verify')->name('verify');
