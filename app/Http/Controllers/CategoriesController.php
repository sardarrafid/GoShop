<?php

namespace App\Http\Controllers;

use App\Models\categories;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $categorys = categories::all();
     return view('Dashboard.pages.category.index', compact('categorys'));
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Dashboard.pages.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
   public function store(Request $request)
   
        {
           

            // 1️⃣ Validate
            $request->validate([
                'name' => 'required|string|max:255|unique:categories,name',
                'image' => 'nullable|image|mimes:jpeg,jpg,png,gif,webp,svg|max:2048',
                'meta_title' => 'nullable|string|max:255',
                'meta_description' => 'nullable|string',
                'meta_keywords' => 'nullable|string',
            ]);
            
            
            // 2️⃣ Handle Image Upload
            $imageName = null;
            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $imageName = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path('uploads/category'), $imageName);
            }

            // 3️⃣ Create Category
            categories::create([
                'name' => $request->name,
                'slug' => Str::slug($request->name),
                'image' => $imageName,
                'meta_title' => $request->meta_title ?? $request->name,
                'meta_description' => $request->meta_description,
                'meta_keywords' => $request->meta_keywords,
            ]);

            // 4️⃣ Redirect
            return redirect()->route('category.index')->with('success', 'Category created successfully!');
        }

    /**
     * Display the specified resource.
     */
    public function show(categories $categories)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
        {
            $category = categories::findOrFail($id); // Fetch category or fail
            return view('Dashboard.pages.category.edit', compact('category'));
        }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
        {
            $category = categories::findOrFail($id);

            // 1️⃣ Validate
            $request->validate([
                'name' => 'required|string|max:255|unique:categories,name,' . $category->id,
                'image' => 'nullable|image|mimes:jpeg,jpg,png,gif,webp,svg|max:2048',
                'meta_title' => 'nullable|string|max:255',
                'meta_description' => 'nullable|string',
                'meta_keywords' => 'nullable|string',
            ]);

            // 2️⃣ Handle Image Upload
            if ($request->hasFile('image')) {
                // Delete old image if exists
                if ($category->image && file_exists(public_path('uploads/category/' . $category->image))) {
                    unlink(public_path('uploads/category/' . $category->image));
                }

                $file = $request->file('image');
                $imageName = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path('uploads/category'), $imageName);

                $category->image = $imageName; // Update image
            }

            // 3️⃣ Update Category
            $category->name = $request->name;
            $category->slug = Str::slug($request->name);
            $category->meta_title = $request->meta_title ?? $request->name;
            $category->meta_description = $request->meta_description;
            $category->meta_keywords = $request->meta_keywords;
            
            $category->save();

            // 4️⃣ Redirect
            return redirect()->route('category.index')->with('success', 'Category updated successfully!');
        }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
            $category = categories::findOrFail($id);
            $category->delete();

            return redirect()->route('category.index')->with('success', 'Category deleted!');
        }
}
