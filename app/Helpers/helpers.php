<?php

//create helpers for active menu
if(! function_exists('setActive')) {
    function setActive($path) {
        return Request::is($path . '*') ? ' active' : '';
    }
}

//create helpers for converting date from database to indonesian date format

if(! function_exists('TanggalID')) {
    function TanggalID($tanggal) {
        $value = Carbon\Carbon::parse($tanggal);
        $parse = $value->local('id');
        return $parse->translatedFormat('l, d F Y');
    }
}

?>
