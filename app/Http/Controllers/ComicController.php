<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Comic;

// soluzione con model

class ComicController extends Controller
{
     public function comics() {

         $comics = Comic::all() ;
        $data = ['volumi' => $comics];
         return view('comics', $data);
     }


      public function dettaglio($id) {
        $comics = config('comics-database');
        $data = ['volumi' => $comics[$id]];
    
        return view('dettaglio', $data);
    }


}


// soluzione senza model

// class ComicController extends Controller
// {

// public function comics() {

//     $comics = config('comics-database');
//     $data = ['volumi' => $comics];
//      return view('comics', $data);
//  }


//   public function dettaglio($id) {
//     $comics = config('comics-database');
//     $data = ['volumi' => $comics[$id]];

//     return view('dettaglio', $data);
// }


// }


