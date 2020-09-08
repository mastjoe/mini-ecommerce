<?php

namespace App\Http\Controllers\API\V1;

use App\Supplier;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SupplierController extends Controller
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
                "data"    => Supplier::all(),
                "message" => "suppliers fetched"
            ]);

        } catch (\Throwable $th) {
            //throw $th;

            return response()->json([
                "status"  => "error",
                "message" => "could not fetch suppliers! Try again!",
                "error" => $th->getMessage()
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
            "name"        => "required|string|unique:suppliers,name",
            "email"       => "nullable|email|unique:suppliers,email",
            "phone"       => "nullable|digits_between:8,15",
            "address"     => "nullable|string",
            "description" => "nullable|string"
        ]);

       $supplier = Supplier::create($request->only('name', 'email', 'phone', 'address', 'description'));
       return response()->json([
           "status"  => "success",
           "data"    => $supplier,
           "message" => "supplier record created"
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
        $supplier = Supplier::findOrFail($id);
        return response()->json([
            "status"  => "success",
            "data"    => $supplier,
            "message" => "supplier details fetched"
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
            "name"        => "required|string|unique:suppliers,name,".$request->name.",name",
            "email"       => "nullable|email|unique:suppliers,email,".$request->email.",email",
            "phone"       => "nullable|digits_between:8,15",
            "address"     => "nullable|string",
            "description" => "nullable|string"
        ]);

        $supplier = Supplier::findOrFail($id);

        if ($supplier->update($request->only('name', 'email', 'phone', 'address', 'description'))) {
            return response()->json([
                "status" => "success",
                "data" => $supplier,
                "message" => "supplier updated"
            ]);
        }
        return response()->json([
            "status" => "error",
            "message" => "supplier was not updated! Try again"
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
        $supplier = Supplier::findOrFail($id);
        if ($supplier->delete()) {
            
            return response()->json([
                "status" => "success",
                "message" => "supplier {$supplier->name} was successfully deleted"
            ]);
        }

        return response()->json([
            "status" => "error",
            "message" => "supplier was not deleted! Try again"
        ]);
    }
}
