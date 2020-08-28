<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SiswaController extends Controller
{
    public function index(){
        return"Berhasil Memproses Data";
    }
    public function insertSiswa(){
        $result=DB::insert("INSERT INTO siswas(nama) VALUES ('Julius Ryan Listianto')");
        dump($result);
    }
    public function updateSiswa(){
        $result=DB::insert("UPDATE `siswas` SET `nama` = 'Adhi Satria', `created_at` = NULL, `updated_at` = NULL WHERE `siswas`.`id` = 2;");
        dump($result);
    }
    public function deleteSiswa(){
        $result=DB::insert("DELETE FROM `siswas` WHERE `siswas`.`id` = 3;");
        dump($result);
    }
}
