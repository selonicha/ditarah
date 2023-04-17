<?php

namespace App\Http\Controllers;

use App\Models\TopikUtama;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class TopikUtamaAdminController extends Controller
{
    public function index(Request $request)
    {

        $posts = TopikUtama::latest();


        // $search = $request->searchTopikUtama;
        // $posts = DB::table('topik_utama')->where('penulis', 'like', "%" . $search . "%");

        return view('admin.konten.topikUtama.index', ['posts' => $posts]);
    }

    public function search(Request $request)
    {
        $search = TopikUtama::where('judul', '=', '%' . $request->searchTopikUtama . '%')->orWhere('penulis', '=', '%' . $request->searchTopikUtama . '%')->get();
        return json_encode($search);
    }
    public function create()
    {
        return view('admin.konten.topikUtama.create');
    }

    public function saveCreate(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'penulis' => 'required',
            'penjelasan' => 'required',
            'file' => 'image'

        ]);


        $id = IdGenerator::generate(['table' => 'topik_utama', 'length' => 10, 'prefix' => 'KTU']);

        DB::table('topik_utama')->insert([
            'id' => $id,
            'judul' => $request->judul,
            'penjelasan' => $request->penjelasan,
            'file' => $request->file('file')->store('topik-utama'),
            'penulis' => $request->penulis,
        ]);


        return redirect('topikUtama');
    }

    public function edit($id)
    {
        $topikUtama = TopikUtama::find($id);
        return view('admin.konten.topikUtama.edit', compact(['topikUtama']))->with('success', 'Berhasil');
    }

    public function update(Request $request, $id)
    {

        $rules = [
            'judul' => 'required',
            'penulis' => 'required',
            'penjelasan' => 'required',
            'file' => 'image'
        ];



        DB::table('topik_utama')->where('id', $request->id)->update([
            'judul' => $request->judul,
            'penulis' => $request->penulis,
            'penjelasan' => $request->penjelasan,
            'file' => $request->file('file')->store('topik-utama'),
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/topikUtama');
    }

    public function destroy(Request $request, $id)
    {

        $topikUtama = TopikUtama::where('id', $id);
        $topikUtama->delete();
        return view('admin.konten.topikUtama.index');
    }

    public function show(Request $request, $id)
    {
        
        $topikUtama = TopikUtama::find($id);
        return view('admin.konten.topikUtama.show', compact(['topikUtama']))->with('success', 'Berhasil');
    }
}
