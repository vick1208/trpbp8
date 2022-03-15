<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GuruCont extends Controller
{
    public function dg(){
        $dataguru=DB::table('tb_guru')->get();
        return view('guru',['guru'=>$dataguru]);
    }
    
    public function detail($id_guru){
        $detguru= DB::table('tb_guru')->where('id_guru',$id_guru)->first();
        if (!$detguru) {
            abort(404);
        }
        return view('dtlguru',['guru'=>$detguru]);
    }

    public function add(){
        return view('addguru');
    }

    public function store(Request $r){
        DB::table('tb_guru')->insert(
            [   'nip'=>$r->nip,
                'nama_guru'=>$r->nama_guru,
                'mapel'=>$r->mapel
            ]
        );

        return redirect('/guru');
    }

    public function delete($id_guru){
        DB::table('tb_guru')->where('id_guru',$id_guru)->delete();
        return redirect('/guru');
    }

    public function edit($id_guru){
        $hasil = DB::table('tb_guru')->where('id_guru',$id_guru)->get();
        return view('editguru',['hasil'=>$hasil]);
    }

    

    public function ubah(Request $r){
        DB::table('tb_guru')->where('id_guru',$r->id)->update(
            ['nip'=>$r->nip,
             'nama_guru'=>$r->nama_guru,
             'mapel'=>$r->mapel
            ]
        );

    

        return redirect('/guru');
    }
}
