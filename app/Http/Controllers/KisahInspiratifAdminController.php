<?php

namespace App\Http\Controllers;

use App\Models\KisahInspiratif;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KisahInspiratifAdminController extends Controller
{
    public function index()
    {
        $posts = KisahInspiratif::latest();
        return view('admin.konten.kisahInspiratif.index', compact($posts));
    }

    public function create()
    {
        return view('admin.konten.kisahInspiratif.create');
    }

    public function saveCreate(Request $request)
    {

        $request->validate([
            'judul' => 'required',
            'penulis' => 'required',
            'penjelasan' => 'required',
            'file' => 'image'

        ]);

        $id = IdGenerator::generate(['table' => 'kisah_inspiratif', 'length' => 10, 'prefix' => 'KKI']);
        DB::table('kisah_inspiratif')->insert([
            'id' => $id, 'judul' => $request->judul,
            'penjelasan' => $request->penjelasan,
            'file' => $request->file('file')->store('kisah-inspiratif'),
            'penulis' => $request->penulis,

        ]);



        return redirect('kisahInspiratif');
    }
    public function edit($id)
    {
        $kisahInspiratif = KisahInspiratif::find($id);
        return view('admin.konten.kisahInspiratif.edit', compact(['kisahInspiratif']))->with('success', 'Berhasil');
    }

    public function update(Request $request, $id)
    {
        // $kisahInspiratif = TopikUtama::find($id);
        $rules = [
            'judul' => 'required',
            'penulis' => 'required',
            'penjelasan' => 'required',
            'file' => 'image'
        ];

        DB::table('trending_isu')->where('id', $request->id)->update([
            'judul' => $request->judul,
            'penulis' => $request->penulis,
            'penjelasan' => $request->penjelasan,
            'file' => $request->file('file')->store('kisah-inspiratif'),
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/kisahInspiratif');
    }

    public function destroy(Request $request, $id)
    {

        // $kisahInspiratif = KisahInspiratif::where('id', $id);
        // $kisahInspiratif->delete();
        $kisahInspiratif = KisahInspiratif::where('id', $id);
        $kisahInspiratif->delete();
        return view('admin.konten.kisahInspiratif.index');
    }

    public function show(Request $request, $id)
    {
        $kisahInspiratif = KisahInspiratif::find($id);
        return view('admin.konten.kisahInspiratif.show', compact(['kisahInspiratif']))->with('success', 'Berhasil');
    }
}
