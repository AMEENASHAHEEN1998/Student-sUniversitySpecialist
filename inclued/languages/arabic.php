<?php

function lang($phrase){

    static $lang = array(
        'AdminArea' => 'منطقة الأدمن',
       
    );

    return $lang[$phrase];
}