<?php

use App\Models\metadata;

function get_meta_value($meta_key)
{
    $data = metadata::where('meta_key', $meta_key)->first();
    if ($data){
        return $data->meta_value;
    }
}

function set_about_nama($nama)
{
    $arr = explode(" ", $nama);
    $namaAwal = reset($arr);
    $namaAwal2 = "<span class='text-primary'>$namaAwal</span>";
    array_shift($arr);
    $namaAkhir = implode(" ", $arr);
    return $namaAwal2 . " " . $namaAkhir; 
}



?>