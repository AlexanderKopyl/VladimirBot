<?php
$user_data = json_decode(file_get_contents("Kopul.json"),true);
var_dump($user_data['name']);