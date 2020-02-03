<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use App\Http\Requests\StoreMedicinePost;
use App\Http\Requests\UpdateMedicinePut;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class MedicineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orm = DB::table("medicines")
            ->join("categories", "medicines.categories_cat_id", "=", "categories.id")
            ->select("medicines.*", "categories.id as cat_id", "categories.cat_name")
            ->paginate(8);

        return view("Medicines/view", compact("orm"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $orc = App\Category::all();
        return view("Medicines/insert", compact("orc"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMedicinePost $request)
    {
        $orm = new App\Medicine();

        //IMAGE
        if ($request->file('med_image')) {
            $path = Storage::disk('public')->put("images/medicines", $request->file("med_image"));
            $orm->med_image = $path;
        }

        $orm->med_name = $request->med_name;
        $orm->med_pharmaceutical_form = $request->med_pharmaceutical_form;
        $orm->med_description = $request->med_description;
        $orm->med_actives_components = $request->med_actives_components;
        $orm->med_indications = $request->med_indications;
        $orm->med_dosage = $request->med_dosage;
        $orm->med_contraindications = $request->med_contraindications;
        $orm->med_adverse_reactions = $request->med_adverse_reactions;
        $orm->med_pharmacokinetics = $request->med_pharmacokinetics;
        $orm->categories_cat_id = $request->categories_cat_id;

        $orm->save();

        return response()->json([
            "mensaje" => "<div class='alert alert-success'>Se ha registrado correctamente el medicamento.</div>",
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
        $orm = DB::table("medicines")
            ->join("categories", "medicines.categories_cat_id", "=", "categories.id")
            ->select("medicines.*", "categories.id as cat_id", "categories.cat_name")
            ->where("medicines.id", "=", $id)
            ->get();

        return view("Medicines/detail", compact("orm"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $orm = App\Medicine::FindOrFail($id);
        $orc = App\Category::all();

        return view("Medicines/update", compact("orm", "orc"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMedicinePut $request, $id)
    {
        $orm = App\Medicine::FindOrFail($id);

        // IMAGE
        if ($request->file('med_image')) {
            Storage::disk("public")->delete($orm->med_image);

            $path = Storage::disk('public')->put("images/medicines", $request->file("med_image"));
            $orm->med_image = $path;
        }

        $orm->med_name = $request->med_name;
        $orm->med_pharmaceutical_form = $request->med_pharmaceutical_form;
        $orm->med_description = $request->med_description;
        $orm->med_actives_components = $request->med_actives_components;
        $orm->med_indications = $request->med_indications;
        $orm->med_dosage = $request->med_dosage;
        $orm->med_contraindications = $request->med_contraindications;
        $orm->med_adverse_reactions = $request->med_adverse_reactions;
        $orm->med_pharmacokinetics = $request->med_pharmacokinetics;
        $orm->categories_cat_id = $request->categories_cat_id;

        $orm->update();

        return response()->json([
            "mensaje" => "<div class='alert alert-success'>Se ha actualizado correctamente el medicamento.</div>",
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
        $orm = App\Medicine::FindOrFail($id);

        Storage::disk("public")->delete($orm->med_image);

        $orm->delete();

        return response()->json([
            "mensaje" => "El " . $orm->med_name . " ha sido eliminado correctamente."
        ]);
    }
}
