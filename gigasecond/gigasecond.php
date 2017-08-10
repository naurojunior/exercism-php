<?php

function from(DateTime $dateInput){
    $date = clone $dateInput;
    $date->add(new DateInterval('PT1000000000S'));
    return $date;
}
