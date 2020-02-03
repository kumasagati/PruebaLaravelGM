<?php

use Faker\Provider\Lorem;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MedicinesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cantidad_clasificaciones = DB::table("categories")->count();

        for ($i = 0; $i < $cantidad_clasificaciones; $i++) {
            for ($j = 0; $j < 10; $j++) {
                DB::table("medicines")->insert([
                    "med_name" => "Medicamento " . $i . $j,
                    "med_pharmaceutical_form" => "Sólida",
                    "med_description" => Lorem::text(100),
                    "med_actives_components" => "Principio Activo " . $i . ", Principio Activo " . $j,
                    "med_indications" => Lorem::text(75),
                    "med_dosage" => Lorem::text(80),
                    "med_contraindications" => Lorem::text(100),
                    "med_adverse_reactions" => Lorem::text(75),
                    "med_pharmacokinetics" => Lorem::text(100),
                    "med_image" => "images/medicines/imagen_generica.png",
                    "categories_cat_id" => ($i + 1)
                ]);
            }
        }
    }
}
