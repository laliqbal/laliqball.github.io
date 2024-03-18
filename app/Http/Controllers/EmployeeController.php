<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\YourModel;
use Egulias\EmailValidator\Validation\Exception\EmptyValidationList;

class YourController extends Controller
{
    public function store(Request $request)
    {
        // Validasi data jika diperlukan
        // $request->validate([
        //     'nama_field' => 'required',
        //     'email_field' => 'required|email',
        //     // Tambahkan validasi lainnya sesuai kebutuhan
        // ]);

        // Simpan data ke dalam basis data menggunakan model
        EmptyValidationList::create($request->all());

        // Redirect ke halaman yang sesuai dengan pesan sukses
        return redirect()->route('halaman_tertentu')->with('success', 'Data berhasil ditambahkan!');
    }
}
