<?php

function searchCityTime($cities, $city_name) {
    foreach ($cities as $city) {
        if ($city['name'] === $city_name) {
            return $city;
        }
    }
    return null;
}

function getCityTime($time_zone) {
    $date_time = new DateTime('', new DateTimeZone($time_zone));
    return $date_time->format('H:i');
}
