<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Category;
use \App\Tool;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        return view('category.index', compact('categories'));
        // return view('category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return 132;
        return view('category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request->cover;
        $validatedData = $request->validate([
            "name" => "required",
            "slug" => "required",
            "description" => "nullable",
            "cover" => "image|mimes:jpeg,png,jpg,gif,svg",
        ]);
        $name = $validatedData['name'];
        $slug = $validatedData['slug'];
        $description = $validatedData['description'];

        
        if ($request->has('cover')) {
            $cover = time().'.'.request()->cover->getClientOriginalExtension();
            request()->cover->move(public_path('images'), $cover);
            $cover = asset('images/'.$cover);
        } else {
            $cover = Null;
        }

        $category = new Category;
        $category->name = $name;
        $category->slug = $slug;
        $category->description = $description;
        if ($cover != null) {
            $category->cover = $cover;
        }
        $category->save();

        return redirect(route('settings.category.edit'));
        return $request;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $category = Category::where('slug', '=', $slug)->first();
        $tools = Tool::where('category_id', '=', $category->id)->get();
        return view('category.show', compact('category', 'tools'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::where('id', '=', $id)->first();
        
        return view('category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // return $request->cover;
        $validatedData = $request->validate([
            "name" => "required",
            "title" => "required",
            "slug" => "required",
            "description" => "nullable",
            "cover" => "image|mimes:jpeg,png,jpg,gif,svg",
        ]);
        $name = $validatedData['name'];
        $title = $validatedData['title'];
        $slug = $validatedData['slug'];
        $description = $validatedData['description'];

        
        if ($request->has('cover')) {
            $cover = time().'.'.request()->cover->getClientOriginalExtension();
            request()->cover->move(public_path('images'), $cover);
            $cover = asset('images/'.$cover);
        } else {
            $cover = Null;
        }
        
        $details = [
            'name' => $name,
            'title' => $title,
            'slug' => $slug,
            'description' => $description,
            'cover' => ''
        ];
        if ($cover != null) {
            $details['cover'] = $cover;
        }
        $category = Category::where('id', '=', $id)->update($details);
        return redirect(route('settings.category.edit'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();
        return redirect(route('settings.category.edit'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit_all()
    {
        $categories = Category::paginate(15);
        return view('settings.category.index', compact('categories'));
    }
}
