<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App;
use App\Http\Requests\StoreCategoryPost;
use App\Http\Requests\UpdateCategoryPut;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware("auth");
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orc = App\Category::all();
        return view("Categories/view", compact("orc"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("Categories/insert");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCategoryPost $request)
    {
        $validated = $request->validated();

        $orc = new App\Category();
        $orc->cat_name = $request->cat_name;

        $orc->save();

        return response()->json([
            "mensaje" => "<div class='alert alert-success'>Se ha registrado correctamente la categoria.</div>",
            "resultado" => "1"
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
        $orc = App\Category::FindOrFail($id);
        $orm = DB::table("medicines")
            ->where("medicines.categories_cat_id", "=", $id)
            ->paginate(8);

        return view("Categories/detail", compact("orc", "orm"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $orc = App\Category::FindOrFail($id);

        return view("Categories/update", compact("orc"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCategoryPut $request, $id)
    {
        $validated = $request->validated();

        $orc = App\Category::FindOrFail($id);
        $orc->cat_name = $request->cat_name;
        $orc->update();

        return response()->json([
            "mensaje" => "<div class='alert alert-success'>Se ha actualizado correctamente la categoria.</div>",
            "resultado" => "1"
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
        $orc = App\Category::FindOrFail($id);

        $orc->delete();

        return response()->json([
            'mensaje' => $orc->cat_name . " fue eliminado correctamente"
        ]);
    }
}
