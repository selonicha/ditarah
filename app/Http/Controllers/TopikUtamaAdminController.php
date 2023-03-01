<?php

namespace App\Http\Controllers;

use App\Models\TopikUtama;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;



class TopikUtamaAdminController extends Controller
{
    public function index()
    {
        $posts = TopikUtama::all();

        return view('admin.konten.topikUtama.index', compact('posts'));
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

        $newPost = [
            'judul' => $request->judul,
            'penjelasan' => $request->penjelasan,
            'file' => $request->file('file')->store('topik-utama'),
            'penulis' => $request->penulis,

        ];

        TopikUtama::create($newPost);

        return view('admin.konten.topikUtama.index');
    }

    public function edit($id)
    {
        $topikUtama = TopikUtama::find($id);
        return view('admin.konten.topikUtama.edit', compact(['topikUtama']))->with('success', 'Berhasil');
    }

    public function update(Request $request, $id)
    {
        // $topikUtama = TopikUtama::find($id);
        $rules = [
            'judul' => 'required',
            'penulis' => 'required',
            'penjelasan' => 'required',
            'file' => 'image'
        ];

        // $updatePost = [
        //     'judul' => $request->judul,
        //     'penulis' => $request->penulis,
        //     'penjelasan' => $request->penjelasan,
        //     'file' => $request->file('file')->store('topik-utama')
        // ];
        //$validateData = $request->validate($rules);
        // $topikUtama = TopikUtama::find($id);
        // $topikUtama->save([$request->all()]);
        // //$topikUtama->update($updatePost);

        // return view('admin.konten.topikUtama.index');

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
        return ('admin.konten.topikUtama.index');
    }

    public function show(Request $request, $id)
    {
        $topikUtama = TopikUtama::find($id);
        return view('admin.konten.topikUtama.show', compact(['topikUtama']))->with('success', 'Berhasil');
    }

    public function search(Request $request)
    {
        $posts = TopikUtama::all();
        if ($request->has('search')) {
            $posts->where('judul', 'like', '%' . $request('search') . '%');
        } else {
            $posts = TopikUtama::all();
        }

        return view('admin.konten.topikUtama.index', ['posts' => $posts]);
    }
}
