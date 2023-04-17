<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TrendingIsu;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use Illuminate\Support\Facades\DB;

class TrendingIsuAdminController extends Controller
{
    public function index()
    {
        $posts = TrendingIsu::all();
        return view('admin.konten.trendingIsu.index', compact($posts));
    }

    public function create()
    {
        return view('admin.konten.trendingIsu.create');
    }

    public function saveCreate(Request $request)
    {

        $request->validate([
            'judul' => 'required',
            'penulis' => 'required',
            'penjelasan' => 'required',
            'file' => 'image'

        ]);

        $id = IdGenerator::generate(['table' => 'trending_isu', 'length' => 10, 'prefix' => 'KTI']);
        DB::table('trending_isu')->insert([
            'id' => $id,
            'judul' => $request->judul,
            'penjelasan' => $request->penjelasan,
            'file' => $request->file('file')->store('trending-isu'),
            'penulis' => $request->penulis,

        ]);

        return redirect('trendingIsu');
    }
    public function edit($id)
    {
        $trendingIsu = TrendingIsu::find($id);
        return view('admin.konten.trendingIsu.edit', compact(['trendingIsu']))->with('success', 'Berhasil');
    }

    public function update(Request $request, $id)
    {
        // $trendingIsu = TopikUtama::find($id);
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
            'file' => $request->file('file')->store('trending-isu'),
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/trendingIsu');
    }

    public function destroy(Request $request, $id)
    {

        $trendingIsu = TrendingIsu::where('id', $id);
        $trendingIsu->delete();
        return view('admin.konten.trendingIsu.index');
    }

    public function show(Request $request, $id)
    {
        $trendingIsu = TrendingIsu::find($id);
        return view('admin.konten.trendingIsu.show', compact($trendingIsu))->with('success', 'Berhasil');
    }
}
