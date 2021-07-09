<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\news2;
use App\Models\Authors;

class News2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news2 = news2::all();
        $author = Authors::all();
        return view('admin.news2.news2', compact("news2", "author"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = Authors::all();
        return view('admin.news2.create', compact("data"));
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

        news2::create($input);

        return redirect()->route('news2.index');
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
        $news2 = news2::findOrFail($id);
        return view('admin.news2.edit', compact('news2'));
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
        $input = $request->all();

        if ($image = $request->file('picture')) {
            $destinationPath = public_path('/img/uploads/');
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['picture'] = "$profileImage";
        } else {
            unset($input['picture']);
        }

        $news2 = news2::find($id);
        $news2->update($input);

        return redirect()->route('news2.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        news2::findOrFail($id)->delete();
        return redirect()->back();
    }
}
