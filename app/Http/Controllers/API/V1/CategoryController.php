<?php

namespace App\Http\Controllers\API\V1;

use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        try {
            //code...
            return response()->json([
                "status"  => "success",
                "data"    => Category::all(),
                "message" => "categories fetched",
            ]);
        } catch (\Throwable $th) {
            //throw $th;
            return response()->json([
                "status" => "error",
                "message" => "error in fetching categories",
                "error" => $th->getMessage(),
            ], 500);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            "name"        => "required|string|unique:categories,name",
            "description" => "nullable|string"
        ]);

        $category = Category::create($request->only('name', 'description'));
        return response()->json([
            "status"  => "success",
            "message" => "category created",
            "data"    => $category
        ]);
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
        $category = Category::findOrFail($id);
        return response()->json([
            "status"  => "success",
            "data"    => $category,
            "message" => "category details fetched"
        ]);
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
        //
        $request->validate([
            "name"        => "required|string|unique:categories,name,".$request->name.",name",
            "description" => "nullable|string"
        ]);

        $category = Category::findOrFail($id);

        if ($category->update($request->only("name", "description"))) {
            return response()->json([
                "status"  => "success",
                "data"    => $category,
                "message" => "category updated"
            ]);
        }
        return response()->json([
            "status"  => "error",
            "message" => "Category not updated! Try again"
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $category = Category::findOrFail($id);

        if ($category->delete()) {
            return response()->json([
                "status"  => "success",
                "message" => "category {$category->name} was deleted"
            ]);
        }
        return response()->json([
            "status"  => "error",
            "message" => "category not deleleted"
        ]);
    }
}
