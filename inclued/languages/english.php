<?php

function lang($phrase){

    static $lang = array(
        'AdminArea' => 'Admin Area',
        
    );

    return $lang[$phrase];
}