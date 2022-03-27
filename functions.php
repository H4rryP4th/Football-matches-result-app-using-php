<?php

function initiateAPI()
{

    $date = date('Y-m-d');

    $url = "https://api.soccersapi.com/v2.2/fixtures/?user=agungpatiung&token=0aa28186d45660a5cee06a429727c337&t=schedule&d=" . $date . "&league_id=1609";

    // init call
    $curl = curl_init($url);

    // option GET request
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

    $result = curl_exec($curl);

    // close connection
    curl_close($curl);

    return $result;
}

function converIntoArray()
{
    $result = initiateAPI();

    $responseArray = json_decode($result, true);
    return $responseArray;
}


function yesterdayMatches()
{
    $date = date('Y-m-d');
    $yesterday = strftime("%Y-%m-%d", strtotime("$date -1 day"));

    $url = "https://api.soccersapi.com/v2.2/fixtures/?user=agungpatiung&token=0aa28186d45660a5cee06a429727c337&t=schedule&d=" . $date . "&league_id=1609";

    // init call
    $curl = curl_init($url);

    // option GET request
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

    $result = curl_exec($curl);

    // close connection
    curl_close($curl);

    return json_decode($result, true);
}

function tomorrowMatches()
{
    $date = date('Y-m-d');
    $yesterday = strftime("%Y-%m-%d", strtotime("$date -1 day"));

    $url = "https://api.soccersapi.com/v2.2/fixtures/?user=agungpatiung&token=0aa28186d45660a5cee06a429727c337&t=schedule&d=" . $date . "&league_id=1609";

    // init call
    $curl = curl_init($url);

    // option GET request
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

    $result = curl_exec($curl);

    // close connection
    curl_close($curl);

    return json_decode($result, true);
}
