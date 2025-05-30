<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Category;
use App\Http\Requests\CategoryRequest;

class CategoryController extends Controller
{
    private $objCategory;

    public function __construct(){
        $this->objCategory = new Category();
    }
    public function index()
    {
     return view('categorias-cadastrar', ['categories' => $categories] );
    }

    public function listar()
    {
     $categories = \App\Models\Category::all();
     return view('categorias', ['categories' => $categories] );
    }

    public function create()
    {
     return view('categorias.create', ['category' => '']);
    }

    public function store(CategoryRequest $request)
    {
        $category= $this->objCategory->create([
            'name'=>$request->name,
            'slug'=> str_slug($request->name),
            'description'=>$request->description
        ]);
        if($category){
            return redirect('categorias/listar')->with('msg', 'Categoria criada com sucesso.');
        }
    }
 
    public function edit($id)
    {
     $category = $this->objCategory->find($id);
     return view('categorias.edit', ['category' => $category] );
    }

    public function update(Request $request, $id)
    {
        $this->objCategory->where(['id' => $id])->update([
            'name'=>$request->name,
            'slug'=> str_slug($request->name),
            'description'=>$request->description
        ]);
        return redirect('categorias/listar')->with('msg', 'Categoria editada com sucesso.');;
    }
 
    public function destroy($id)
    {
        $category = $this->objCategory->find($id)->delete();
        return redirect('categorias/listar')->with('msg', 'Categoria excluída com sucesso.');
    }
}
