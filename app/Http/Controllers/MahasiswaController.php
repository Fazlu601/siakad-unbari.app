<?php

namespace App\Http\Controllers;

use App\Models\Identitas_mahasiswa;
use App\Models\Mahasiswa;
use App\Models\Prodi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class MahasiswaController extends Controller
{
    //
    public function index()
    {
        return view('mahasiswa.index', [
            "session" => "admin",
            "data" => Mahasiswa::all()
        ]);
    }

    public function create()
    {
        return view('mahasiswa.create', [
            "session" => "admin",
            "data" => Prodi::all()
        ]);
    }

    public function store(Request $request)
    {
        $mahasiswaData = $request->validate([
            "nama_lengkap" => ["required"],
            "nim" => ["required"],
            "jenis_kelamin" => ["required"],
            "waktu_kuliah" => ["required"],
            "prodi_id" => ["required"],
            "angkatan" => ["required"],
            "password" => ["required"],
            "password_confirm" => ["required", "same:password"]
        ]);

        $mahasiswaData['password'] = Hash::make($mahasiswaData['password']);

        $identitasData = [
            "nik" => null,
            "nisn" => null
        ];

        $mahasiswaID = Mahasiswa::create($mahasiswaData)->id;

        $identitasData['mahasiswa_id'] = $mahasiswaID;

        Identitas_mahasiswa::create($identitasData);

        return redirect('/mahasiswa/data')->with('success', 'Data Baru Berhasil Ditambahkan!');

    }

    public function update(Request $request, $id)
    {
        $mahasiswaData = $request->validate([
            "image" => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            "email" => ["required", "email"],
            "no_telp" => ["required"],
        ]);

        $identityData = $request->validate([
            "nik" => ["required"],
            "nisn" => ["required"]
        ]);
   

        if($request->input('password')) {
            if($request->input('password')===$request->input('password_confirm')) {
                $mahasiswaData['password'] = Hash::make($request->input('password'));
            }
        }

        if($request->file('image')){
            $imagePath = $request->file('image')->store('public/mahasiswa_images');
            $mahasiswaData['image'] = str_replace('public/', '', $imagePath);
        }


        Mahasiswa::where('id', $id)
                    ->update($mahasiswaData);

        Identitas_mahasiswa::where('mahasiswa_id', $id)
                            ->update($identityData);

        return back()->with('success', 'Data Profil Berhasil Diupdate');

    }

    public function destroy( Request $request, $id)
    {
        Identitas_mahasiswa::where('mahasiswa_id', $id)->delete();
        Mahasiswa::destroy($id);

        return back()->with('success', 'Data Berhasil Dihapus');
    }

}
