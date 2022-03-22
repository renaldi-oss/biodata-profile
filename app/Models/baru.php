<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;
class baru extends Model
{
    // private static $nama = "Reynaldi Fakhri Pratama";

    // public static function getNama(){
    //     return self::$nama;
    // }

    // public static function getAlamat($id){
    //     if($id === 1){
    //         return "jl.Semanggi Barat 21A";
    //     }else{
    //         return "malang";
    //     }
    // }
    // public static function getArrayku(){
    //     //$data= collect([1,2,3,4,5,6,7,8,9]);
    //     $data = collect(['aldi','selamet','dian']);
    //     // $total='';
    //     // foreach ($data as $d ){
    //     //     $total = (int)$total+(int)$d;
    //     // }
    //     // return $total;
    //     return $data->first();
    // }
    public static function gambarku(){
        return 'fotoku.jpg';
    }
    public static function title($id){
        $data = ['welcome','about','biodata','contact'];
        for ($i=0; $i < count($data); $i++) { 
            if($id === $i){
                return $data[$i];
            }
        }
    }
    public static function data($id){
        $data = [
        'Reynaldi Fakhri Pratama',
        'Aldi',
        'reynaldifp2000@gmail.com',
        'Malang',
        'Politeknik Negeri Malang',
        '4',
        'JL. Semanggi barat 21A',
        '6 agustus 2000',
        '2041720209',
        'Teknik Informatika',
        'islam',
        'umur'];
        for ($i=0; $i < count($data); $i++) { 
            if($i === $id){
                return $data[$id];
            }
        }
    }
    public static function contact($id){
        if($id === 1){
            return "reynaldifp2000@gmail.com";
        }else if($id === 2){
            return 'https://github.com/renaldi-oss';
        }
    }
}
