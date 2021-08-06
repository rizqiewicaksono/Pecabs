<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $category = Category::orderBy('created_at', 'DESC')->paginate(10);
        return view('categories.index', compact('category'));
    }

    public function store(Request $request)
{
    $this->validate($request, [
        'name' => 'required|string|max:50|unique:categories'
    ]);
    $request->request->add(['slug' => $request->name]);
    Category::create($request->except('_token'));
    return redirect(route('category.index'))->with(['success' => 'Kategori Baru Ditambahkan!']);
}
public function edit($id)
{
    $category = Category::find($id);
    return view('categories.edit', compact('category'));
}
public function update(Request $request, $id)
{
    $this->validate($request, [
        'name' => 'required|string|max:50|unique:categories,name,' . $id
    ]);

    $category = Category::find($id);
    $category->update([
        'name' => $request->name,

    ]);
    return redirect(route('category.index'))->with(['success' => 'Kategori Diperbaharui!']);
}
public function destroy($id)
{
    //TAMBAHKAN product KEDALAM ARRAY WITHCOUNT()
    //FUNGSI INI AKAN MEMBENTUK FIELD BARU YANG BERNAMA product_count
    $category = Category::withCount(['cagaralam'])->find($id);
    //KEMUDIAN PADA IF STATEMENTNYA KITA CEK JUGA JIKA = 0
    if ($category->cagaralam_count == 0) {
        $category->delete();
        return redirect(route('category.index'))->with(['success' => 'Kategori Dihapus!']);
    }
  }
}
