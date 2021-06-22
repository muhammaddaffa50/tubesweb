<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\AuthorsResource;
use App\Models\Authors;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AuthorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $authors = Authors::all();
        return response([
            'total' => $authors->count(),
            'messages' => 'Retrieved successfuly',
            'data' => AuthorsResource::collection($authors)
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:100',
            'picture' => 'required|max:100',
            'address' => 'required|max:100'
        ]);
        if ($validator->fails()) {
            return response([
                'error' => $validator->errors(),
                'status' => 'Validation Error'
            ]);
        }
        $authors = Authors::create($request->all());
        return response(['data' => new AuthorsResource($authors), 'message' => 'Authors has been
            created!'], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $authors = Authors::find($id);
        if ($authors != null) {
            return response(['data' => new AuthorsResource($authors), 'message' => 'Retrieved
successfully'], 200);
        } else {
            return response([
                'message' => 'No data found!',
            ], 403);
        }
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
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:100',
            'picture' => 'required|max:100',
            'address' => 'required|max:100'
        ]);
        if ($validator->fails()) {
            return response([
                'error' => $validator->errors(),
                'status' => 'Validation Error'
            ]);
        }
        $authors = Authors::find($id);
        if ($authors != null) {
            $authors->update($request->all());
            return response(['data' => new AuthorsResource($authors), 'message' => 'Authors has
            been updated!'], 202);
        } else {
            return response([
                'message' => 'No data found!',
            ], 403);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $authors = Authors::find($id);
        if ($authors != null) {
            $authors->delete();
            return response(['message' => 'Authors has been deleted!']);
        } else {
            return response([
                'message' => 'No data found!',
            ], 403);
        }
    }
    public function random()
    {
        $authors = Authors::all()->random(1);
        if ($authors != null) {
            return response(['data' => new AuthorsResource($authors), 'message' => 'Retrieved
successfully'], 200);
        } else {
            return response([
                'message' => 'No random data found!',
            ], 403);
        }
    }
}