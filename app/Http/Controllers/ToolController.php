<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Tool;

class ToolController extends Controller
{
    public function __construct() {

        $this->middleware(['auth','can:add tool'],
        ['only' => ['create', 'store']]);

        $this->middleware(['auth','can:edit tool'],
        ['only' => ['edit', 'update']]);

        $this->middleware(['auth','can:remove tool'],
        ['only' => ['destroy']]);   
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($category)
    {
        $category_id = \App\Category::where('slug', '=', $category)->pluck('id');
        if ($category_id == '[]' ) {
            abort(404);
        }
        // return $category_id;
        $tools = \App\Tool::where('category_id', '=', $category_id)->get();
        
        return view('tool.index', compact('tools'));
        // return $tools;
        // return 'all tools for '. $category . ' category';
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tool.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return $request;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($category, $tool_slug)
    {
        $category_id = \App\Category::where('slug', '=', $category)->pluck('id');
        if ($category_id == '[]' ) {
            abort(404);
        }

        $tool = \App\Tool::where('slug', '=', $tool_slug)
        ->where('category_id', '=', $category_id)
        ->first();
        $tool == '[]' ? abort(404) : '';

        return view('tool.show', compact('tool'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($category, $tool_slug)
    {
        $tool = Tool::where('slug', '=', $tool_slug)->first();
        
        return view('tool.edit', compact('tool'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $category, $id)
    {
        // return $request->cover;
        $validatedData = $request->validate([
            "name" => "required",
            "slug" => "required",
            "sentence" => "required",
            "description" => "nullable",
            "about" => "nullable",
            "cover" => "image|mimes:jpeg,png,jpg,gif,svg",
            "meta_tags" => "nullable"
        ]);
        $name = $validatedData['name'];
        $slug = $validatedData['slug'];
        $sentence = $validatedData['sentence'];
        $description = $validatedData['description'];
        $about = $validatedData['about'];
        $meta_tags = $validatedData['meta_tags'];
        

        $questions = array();
        foreach ($request['questions'] as $key => $question) {
            $answer = $request['answers'][$key];

            if ($question == null || $answer == null) {continue;}

            array_push($questions, [
                'question'=>$question,
                'answer'=>$answer
                ]
            );
        }
        // return json_encode($questions);

        if ($request->has('cover')) {
            $cover = time().'.'.request()->cover->getClientOriginalExtension();
            request()->cover->move(public_path('images'), $cover);
            $cover = asset('images/'.$cover);
        } else {
            $cover = Null;
        }
        if ($cover)
        {
            $values = [
                'name' => $name,
                'slug' => $slug,
                'sentence' => $sentence,
                'description' => $description,
                'about' => $about,
                'cover' => $cover,
                'questions' => json_encode($questions),
                'meta_tags' => $meta_tags,
            ];
        } else {
            $values = [
                'name' => $name,
                'sentence' => $sentence,
                'slug' => $slug,
                'about' => $about,
                'description' => $description,
                'questions' => json_encode($questions),
                'meta_tags' => $meta_tags,
            ];
        }

        $tool = Tool::where('id', '=', $id)
        ->update($values);
        // return $id;
        return redirect(route('settings.tool.edit'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($category, $tool_slug)
    {
        $tool = Tool::where('slug', '=', $tool_slug)->delete();
        return redirect(route('settings.tool.edit'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit_all()
    {
        $tools = Tool::paginate(15);
        // return $tools[0]->category_slug();
        return view('settings.tool.index', compact('tools'));
    }
}
