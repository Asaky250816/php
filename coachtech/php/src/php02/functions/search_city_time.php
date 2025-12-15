<?php

function searchCityTime($city_name)
{
    require('config/cities.php');

    foreach ($cities as $city) {
        if ($city['name'] === $city_name) {
            $data_time = new DateTime("now", new DateTimeZone($city['time_zone']));
            $time = $data_time->format('H:i');
            $city['time'] = $time;

            return $city;
        }
    }
}
