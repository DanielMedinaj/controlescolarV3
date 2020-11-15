<?php

namespace App\Http\Controllers;
namespace App\Http\Controllers\PDOexception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use PDOException;

class ConnectController extends DB
{
    public static function conexion(){
        try{
            $conn = DB::connection();
            } catch(PDOException $e){
               echo "Error: ". $e->getMessage();
               die();
            }
    }
}
//************Aun no funciona