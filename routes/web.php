<?php

use App\DiscordService;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $service = new DiscordService;
    $service->getUserName();
});


Route::get('/accessToken', function () {
    $service = new DiscordService;
    $service->getAccessToken('t08r482ga2P6POMFkSMPQRZ4wLg7jR');
});
