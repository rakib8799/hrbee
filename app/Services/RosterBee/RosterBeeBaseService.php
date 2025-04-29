<?php

namespace App\Services\RosterBee;


use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Http;

abstract class RosterBeeBaseService
{
    abstract public function sendRequest(): Response;
}