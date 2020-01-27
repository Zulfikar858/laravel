<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa = DB::table('mahasiswa')->get();
        
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
