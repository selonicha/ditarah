<?php

namespace App\Http\Controllers;

use App\Models\Sejarah;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SejarahAdminController extends Controller
{
    public function index()
    {
        $posts = Sejarah::all();
        return view('admin.konten.sejarah.index', compact($posts));
    }

    public function create()
    {
        return view('admin.konten.sejarah.create');
    }

    public function saveCreate(Request $request)
    {

        $request->validate([
            'judul' => 'required',
            'penulis' => 'required',
            'penjelasan' => 'required',
            'file' => 'image'

        ]);

        $newPost = [
            'judul' => $request->judul,
            'penjelasan' => $request->penjelasan,
            'file' => $request->file('file')->store('sejarah'),
            'penulis' => $request->penulis,

        ];

        $id = IdGenerator::generate(['table' => 'sejarah', 'length' => 10, 'prefix' => 'KS']);
        DB::table('sejarah')->insert([
            'id' => $id,
            'judul' => $request->judul,
            'penjelasan' => $request->penjelasan,
            'file' => $request->file('file')->store('sejarah'),
            'penulis' => $request->penulis,
        ]);



        return redirect('/sejarah');
    }
    public function edit($id)
    {
        $sejarah = Sejarah::find($id);
        return view('admin.konten.sejarah.edit', compact(['sejarah']))->with('success', 'Berhasil');
    }

    public function update(Request $request, $id)
    {
        // $sejarah = TopikUtama::find($id);
        $rules = [
            'judul' => 'required',
            'penulis' => 'required',
            'penjelasan' => 'required',
            'file' => 'image'
        ];

        DB::table('sejarah')->where('id', $request->id)->update([
            'judul' => $request->judul,
            'penulis' => $request->penulis,
            'penjelasan' => $request->penjelasan,
            'file' => $request->file('file')->store('sejarah'),
        ]);

        // alihkan halaman ke halaman pegawai
        return redirect('/sejarah');
    }

    public function destroy(Request $request, $id)
    {

        // $sejarah = sejarah::where('id', $id);
        // $sejarah->delete();
        $sejarah = Sejarah::where('id', $id);
        $sejarah->delete();
        return view('admin.konten.sejarah.index');
    }

    public function show(Request $request, $id)
    {
        $sejarah = Sejarah::find($id);
        return view('admin.konten.sejarah.show', compact(['sejarah']))->with('success', 'Berhasil');
    }
}
