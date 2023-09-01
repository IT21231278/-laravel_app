<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use App\Models\Category;
 
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $category = Category::orderBy('created_at', 'DESC')->get();
  
        return view('category.index', compact('category'));
    }
  
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('category.create');
    }
  
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         Category::create($request->all());
 
        return redirect()->route('category')->with('success', 'category added successfully');
    }
  
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $category= Category::findOrFail($id);
  
         return view('category.show', compact('category'));
    }
  
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $category = Category::findOrFail($id);
  
         return view('category.edit', compact('category'));
    }
  
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $category = Category::findOrFail($id);
  
        $category->update($request->all());
  
        return redirect()->route('Category')->with('success', 'Category updated successfully');
    }
  
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $category = Category::findOrFail($id);
  
        $category->delete();
  
        return redirect()->route('category')->with('success', 'category deleted successfully');
    }
}