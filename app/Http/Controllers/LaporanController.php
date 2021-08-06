<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Laporan;
use App\Category;
use Illuminate\Support\Str;
use File;

class LaporanController extends Controller
{
    public function index(Request $request)
    {
        $laporan = Laporan::with(['category'])->orderBy('created_at', 'DESC');

        if (request()->q != '') {
            $laporan = $laporan->where('name', 'LIKE', '%' . request()->q . '%');
        }
        $laporan = $laporan->paginate(10);
        return view('laporans.index', compact('laporan'));
    }
    public function create()
{
    //QUERY UNTUK MENGAMBIL SEMUA DATA CATEGORY
    $category = Category::orderBy('name', 'DESC')->get();
    //LOAD VIEW create.blade.php` YANG BERADA DIDALAM FOLDER S
    //DAN PASSING DATA CATEGORY
    return view('laporans.create', compact('category'));
}
public function store(Request $request)
{
    //VALIDASI REQUESTNYA
    $this->validate($request, [
        'name' => 'required|string|max:100',
        'description' => 'required',
        'category_id' => 'required|exists:categories,id', //CATEGORY_ID KITA CEK HARUS ADA DI TABLE CATEGORIES DENGAN FIELD ID
        'image' => 'required|image|mimes:png,jpeg,jpg' //GAMBAR DIVALIDASI HARUS BERTIPE PNG,JPG DAN JPEG
    ]);

    //JIKA FILENYA ADA
    if ($request->hasFile('image')) {
        //MAKA KITA SIMPAN SEMENTARA FILE TERSEBUT KEDALAM VARIABLE FILE
        $file = $request->file('image');
        //KEMUDIAN NAMA FILENYA KITA BUAT CUSTOMER DENGAN PERPADUAN TIME DAN SLUG DARI NAMA . ADAPUN EXTENSIONNYA KITA GUNAKAN BAWAAN FILE TERSEBUT
        $filename = Str::slug($request->name) . '.' . $file->getClientOriginalExtension();
        //SIMPAN FILENYA KEDALAM FOLDER PUBLIC/S, DAN PARAMETER KEDUA ADALAH NAMA CUSTOM UNTUK FILE TERSEBUT
        $file->storeAs('public/laporans', $filename);

        //SETELAH FILE TERSEBUT DISIMPAN, KITA SIMPAN INFORMASI NYA KEDALAM DATABASE
        $laporan= Laporan::create([
            'name' => $request->name,
            'slug' => $request->name,
            'category_id' => $request->category_id,
            'description' => $request->description,
            'image' => $filename, //PASTIKAN MENGGUNAKAN VARIABLE FILENAM YANG HANYA BERISI NAMA FILE SAJA (STRING)
            'status' => $request->status
        ]);
        //JIKA SUDAH MAKA REDIRECT KE LIST
        return redirect(route('laporan.index'))->with(['success' => 'Laporan telah dikirim']);
    }
}
public function destroy($id)
{
    $laporan = Laporan::find($id); //QUERY UNTUK MENGAMBIL DATA  BERDASARKAN ID
    //HAPUS FILE IMAGE DARI STORAGE PATH DIIKUTI DENGNA NAMA IMAGE YANG DIAMBIL DARI DATABASE
    File::delete(storage_path('app/public/laporans/' . $laporan->image));
    //KEMUDIAN HAPUS DATA  DARI DATABASE
    $laporan->delete();
    //DAN REDIRECT KE HALAMAN LIST
    return redirect(route('laporan.index'))->with(['success' => 'Laporan Berhasil Dihapus']);
}
public function edit($id)
{
    $laporan = Laporan::find($id); //AMBIL DATA  TERKAIT BERDASARKAN ID
    $category = Category::orderBy('name', 'DESC')->get(); //AMBIL SEMUA DATA KATEGORI
    return view('laporans.edit', compact('laporan', 'category')); //LOAD VIEW DAN PASSING DATANYA KE VIEW
}
public function update(Request $request, $id)
{
   //VALIDASI DATA YANG DIKIRIM
    $this->validate($request, [
        'name' => 'required|string|max:100',
        'description' => 'required',
        'category_id' => 'required|exists:categories,id',
        'image' => 'nullable|image|mimes:png,jpeg,jpg' //IMAGE BISA NULLABLE
    ]);

    $laporan = Laporan::find($id); //AMBIL DATA  YANG AKAN DIEDIT BERDASARKAN ID
    $filename = $laporan->image; //SIMPAN SEMENTARA NAMA FILE IMAGE SAAT INI

    //JIKA ADA FILE GAMBAR YANG DIKIRIM
    if ($request->hasFile('image')) {
        $file = $request->file('image');
        $filename = Str::slug($request->name) . '.' . $file->getClientOriginalExtension();
        //MAKA UPLOAD FILE TERSEBUT
        $file->storeAs('public/laporans', $filename);
      	//DAN HAPUS FILE GAMBAR YANG LAMA
        File::delete(storage_path('app/public/laporans/' . $laporan->image));
    }

  //KEMUDIAN UPDATE  TERSEBUT
    $laporan->update([
        'name' => $request->name,
        'description' => $request->description,
        'status' => $request->status,
        'category_id' => $request->category_id,
        'image' => $filename
    ]);
    return redirect(route('laporan.index'))->with(['success' => 'Data Laporan Diterima']);
}
}
