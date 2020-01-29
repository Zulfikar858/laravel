<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\mahasiswa;

class MahasiswaController extends Controller
{
    public function index()
    {
        // $mahasiswa = DB::table('mahasiswa')->get();
        $mahasiswa = mahasiswa::all();
        return view('mahasiswa.index',['mahasiswa' => $mahasiswa]);
    }

   
    public function create()
    {
        //
    }

   
    public function store(Request $request)
    {
      
    }

   
    public function show($id)
    {
        
    }


    public function edit($id)
    {
        
    }

    
    public function update(Request $request, $id)
    {
        
    }

  
    public function destroy($id)
    {
    
    }
}
