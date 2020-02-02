<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use App\Http\Requests\StoreMedicinePost;
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
        //
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
        $validated = $request->validated();

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
        //
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
    }
}
