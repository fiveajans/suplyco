<?php

use Carbon\Carbon;

function timeAgo($date)
{
    return Carbon::parse($date)->diffForHumans();
}

function segments()
{
    $baseUrl = config('BASE_URL');
    $baseArray = explode('/', trim(parse_url($baseUrl, PHP_URL_PATH), '/'));

    $requestUri = $_SERVER['REQUEST_URI'];
    $requestArray = explode('/', trim(parse_url($requestUri, PHP_URL_PATH), '/'));

    $diffArray = array_values(array_diff($requestArray, $baseArray));

    return $diffArray;
}

function segment($index)
{
    $baseUrl = config('BASE_URL');
    $baseArray = explode('/', trim(parse_url($baseUrl, PHP_URL_PATH), '/'));

    $requestUri = $_SERVER['REQUEST_URI'];
    $requestArray = explode('/', trim(parse_url($requestUri, PHP_URL_PATH), '/'));

    $diffArray = array_values(array_diff($requestArray, $baseArray));

    return $diffArray[$index];
}
