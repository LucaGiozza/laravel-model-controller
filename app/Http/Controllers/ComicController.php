<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComicController extends Controller
{
     public function comics() {

        $comics = config('comics-database');
        $data = ['volumi' => $comics];
         return view('comics', $data);
     }

      public function dettaglio($id) {
        $comics = config('comics-database');
        $data = ['volumi' => $comics[$id]];
    
        return view('dettaglio', $data);
    }


}


