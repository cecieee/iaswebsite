<?php


function getData(){
    return json_decode(file_get_contents('data.json'), true);
}

