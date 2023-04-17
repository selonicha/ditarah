<?php

namespace App\Http\Controllers;

use App\Models\CalonAdmin;
use App\Models\User;
use Facade\Ignition\QueryRecorder\Query;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CalonAdminController extends Controller
{
    use HasFactory;

    public function index()
    {
        $posts = CalonAdmin::latest();
        return view('admin.nontifikasi.calonAdmin.index', compact('posts'));
    }

    public function create(Request $request, $id)
    {
        $calonAdmin = CalonAdmin::find($id);
        //$id = $calonAdmin['id'];
        $name = $calonAdmin['nama'];
        $email = $calonAdmin['email'];
        $password = $calonAdmin['password'];

        $newAdmin = new User();
        $newAdmin->id = User::count() + 1;
        $newAdmin->name = $name;
        $newAdmin->email = $email;
        $newAdmin->password = $password;
        $newAdmin->save();

        $newAdmin->assignRole('admin');

        $calonAdmin = CalonAdmin::where('id', $id);
        $calonAdmin->delete();

        return redirect('/calonAdmin');
    }

    public function reject(Request $request, $id)
    {
        $posts = CalonAdmin::latest();
        $calonAdmin = CalonAdmin::where('id', $id);
        $calonAdmin->delete();
        return redirect('/');
    }
}
