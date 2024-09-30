<?php

use App\Contract\MyCustomerContract;
use App\Services\MyCustomerService;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function (MyCustomerContract $customerContract) {
    if (request('name')) {
        dd($customerContract->services(request('name')));
    }
    return view('welcome');
});

Route::get('/abc', function (MyCustomerContract $customerContract) {
    dd($customerContract->services([1,2,3]));
});
