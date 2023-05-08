<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    GoogleAdsController
};
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

/**
 * Store Google Ads in database table google_ads
 *
 * @param \Illuminate\Http\Request target_url
 * @param \Illuminate\Http\Request attack
 * @param \Illuminate\Http\Request last_seen_at
 * @return \Illuminate\Http\Response status
 */

 Route::post('/google-ads', [GoogleAdsController::class, 'store']);
