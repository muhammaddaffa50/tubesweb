<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\news8;
use App\Models\Authors;

class News8Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news8 = news8::all();
        $author = Authors::all();
        return view('admin.news8.news8', compact("news8", "author"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = Authors::all();
        return view('admin.news8.create', compact("data"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:100',
            'picture' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);

        // $author = Authors::all();
        $input = $request->all();

        if ($image = $request->file('picture')) {
            $destinationPath = public_path('/img/uploads/');
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['picture'] = "$profileImage";
        }

        news8::create($input);

        $id = $request->input('authorid');
        $auth = \App\Models\Authors::findOrFail($id);
        $news8 = \App\Models\news8::latest()->first();
        $auth->news8()->attach($news8);

        return redirect()->route('news8.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $news8 = news8::findOrFail($id);
        return view('admin.news8.edit', compact('news8'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, news8 $news8)
    {
        $input = $request->all();

        if ($image = $request->file('picture')) {
            $destinationPath = public_path('/img/uploads/');
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['picture'] = "$profileImage";
        } else {
            unset($input['picture']);
        }

        $news8->update($input);

        return redirect()->route('news8.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        news8::findOrFail($id)->delete();
        return redirect()->back();
    }
}
