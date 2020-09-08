<?php

namespace App\Http\Controllers\API\V1;

use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $products = Product::with(['user'])->get();

        return response()->json([
            "status"  => "success",
            "data"    => $products,
            "message" => "products fetched"
        ]);
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
            "name"     => "required|string",
            "supplier" => "required",
            "category" => "required",
            "quantity" => "required|integer",
            "image" => "required|file|image|mimes:png,jpg,jpeg,gif|max:500"
        ]);

        $category = Category::findOrFail($request->category);
        $product = $category->products()->create([
            "name"        => $request->name,
            "supplier_id" => $request->supplier,
            "image"       => $this->uploadImage($request),
            "quantity"    => $request->quantity
        ]);

        return response()->json([
            "status"  => "success",
            "message" => "new product created",
            "data"    => $product
        ]);
    }

    /**
     * upload product image
     * 
     * @param \Illuminate\Http\Request $request
     * @return string|null
     */
    protected function uploadImage(Request $request)
    {
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $extension = $image->extension();
            $file_name = uniqid().".".$extension;
            $upload_path = public_path("uploads/products").$file_name;
            Storage::put(file_get_contents($image), $upload_path);
            return "uploads/products/".$file_name;
        }
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
        $product = Product::with(['category', 'supplier'])->findOrFail($id);
        return response()->json([
            "status"  => "success",
            "message" => "product fetched",
            "data"    => $product,
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
            "name"     => "required|string",
            "supplier" => "required",
            "category" => "required",
            "quantity" => "required|integer",
            "image" => "required|file|image|mimes:png,jpg,jpeg,gif|max:500"
        ]);
        
        $product = Product::findOrFail($id);
        $image = $request->image ? $this->uploadImage($request) : $product->image;

        $product->update([
            "name"        => $request->name,
            "supplier_id" => $request->supplier_id,
            "category_id" => $request->category_id,
            "quantity"    => $request->quantity,
            "image"       => $image
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
        $product = Product::findOrFail($id);

        try {
            //code...
            if ($product->delete()) {
                return response()->json([
                    "status"  => "success",
                    "message" => "product was successfully deleted",
                ]);
            }
        } catch (\Throwable $th) {
            return response()->json([
                "status"  => "error",
                "error"   => $th->getMessage(),
                "message" => "product was not deleted"
            ]);
        }
    }

}
