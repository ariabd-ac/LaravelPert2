<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DaftarSiswaController extends Controller
{
    //
    public function index(Request $request){
        $mahasiswa = [
            ['nama' => 'Ari', 'kelas' => '6A'],
            ['nama' => 'Budi', 'kelas' => '6B'],
            ['nama' => 'Cinta', 'kelas' => '6C'],
            ['nama' => 'Dody', 'kelas' => '6D'],
        ];

        if($request->query('kelas')){
            $mahasiswa = array_filter($mahasiswa, function($kelas){
                return $kelas['kelas'] == request()->kelas;
            });
        }

        return view('daftarsiswa', compact('mahasiswa'));
    }

    public function show($daftarsiswa){
        $mahasiswa = [
            ['nama' => 'Ari', 'kelas' => '6A'],
            ['nama' => 'Budi', 'kelas' => '6B'],
            ['nama' => 'Cinta', 'kelas' => '6C'],
            ['nama' => 'Dody', 'kelas' => '6D'],
        ];

        if($daftarsiswa){
            $mahasiswa = array_filter($mahasiswa, function($kelas){
                return $kelas['kelas'] == request()->segment(count(request()->segments()));
            });
        }
        return view('daftarsiswa', compact('mahasiswa'));
    }
}
