<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SiswaCont extends Controller
{
    public function ds(){
        $datasiswa = DB::table('tb_siswa')->get();
        return view('siswa',['siswa'=>$datasiswa]);
    }
    public function detail($id_siswa){
        $detsiswa = DB::table('tb_siswa')->where('id_siswa',$id_siswa)->first();
        if(!$detsiswa){
            abort(404);
        }
        return view('dtlsiswa',['siswa'=>$detsiswa]);
    }
    public function tambah(){
        return view('addsiswa');
    }
    public function simpan(Request $req){
        DB::table('tb_siswa')->insert(
            [   'nis'=> $req->nis,
                'nama_siswa'=> $req->nama_siswa,
                'kelas'=> $req->kelas
            ]
        );
        return redirect('/siswa');
    }
    public function hapus($id_siswa){
        DB::table('tb_siswa')->where('id_siswa',$id_siswa)->delete();
        return redirect('/siswa');
    }
    public function edit($id_siswa){
        $hasil= DB::table('tb_siswa')->where('id_siswa',$id_siswa)->get();
        return view('editsiswa',['hasil'=>$hasil]);
    }
    public function ubah(Request $req){
        DB::table('tb_siswa')->where('id_siswa',$req->id)->update(
            ['nis'=>$req->nis,
            'nama_siswa'=>$req->nama_siswa,
            'kelas'=>$req->kelas
            ]
        );
        return redirect('/siswa');
    }
}
