<?php

$quotes = json_decode(file_get_contents('quotes.json'));

$rand_num = rand(0, count($quotes));

echo json_encode($quotes[$rand_num]);