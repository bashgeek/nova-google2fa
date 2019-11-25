<?php

use Illuminate\Support\Facades\Route;

/**
 * This route is called when user must first time confirm secret
 */
Route::post('register', 'Bashgeek\Google2fa\Google2fa@register');

/**
 * This route is called when user must first time confirm secret
 */
Route::post('confirm', 'Bashgeek\Google2fa\Google2fa@confirm');

/**
 * This route is called to verify users secret
 */
Route::post('authenticate', 'Bashgeek\Google2fa\Google2fa@authenticate');