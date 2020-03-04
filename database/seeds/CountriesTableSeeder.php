<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $country_id = DB::table('countries')
        ->insertGetId(['name' => 'CANADA']);

        $province_id = DB::table('provinces')
        ->insertGetId(['name' => 'QUEBEC', 'country_id' => $country_id]);

        DB::table('cities')->insert([
            ['name' => 'MONTREAL', 'province_id' => $province_id],
            ['name' => 'GATINEAU', 'province_id' => $province_id],
            ['name' => 'SAINT LAURENT', 'province_id' => $province_id],
        ]);

        $province_id = DB::table('provinces')
        ->insertGetId(['name' => 'ONTARIO', 'country_id' => $country_id]);

        DB::table('cities')->insert([
            ['name' => 'TORONTO', 'province_id' => $province_id],
            ['name' => 'OTTAWA', 'province_id' => $province_id],
            ['name' => 'KITCHENER', 'province_id' => $province_id],
        ]);

        $country_id = DB::table('countries')
        ->insertGetId(['name' => 'UNITED STATES']);

        $province_id = DB::table('provinces')
        ->insertGetId(['name' => 'NEW YORK', 'country_id' => $country_id]);

        DB::table('cities')->insert([
            ['name' => 'NEW YORK', 'province_id' => $province_id],
            ['name' => 'BUFFALO', 'province_id' => $province_id],
            ['name' => 'ROCHESTER', 'province_id' => $province_id],
        ]);

        $province_id = DB::table('provinces')
        ->insertGetId(['name' => 'CALIFORNIA', 'country_id' => $country_id]);

        DB::table('cities')->insert([
            ['name' => 'LOS ANGELES', 'province_id' => $province_id],
            ['name' => 'SAN JOSE', 'province_id' => $province_id],
            ['name' => 'SACRAMENTO', 'province_id' => $province_id],
        ]);

        $country_id = DB::table('countries')
        ->insertGetId(['name' => 'MEXICO']);

        $province_id = DB::table('provinces')
        ->insertGetId(['name' => 'PUEBLA', 'country_id' => $country_id]);

        DB::table('cities')->insert([
            ['name' => 'PUEBLA', 'province_id' => $province_id],
            ['name' => 'SAN MARTIN', 'province_id' => $province_id],
            ['name' => 'TEHUACAN', 'province_id' => $province_id],
        ]);

        $province_id = DB::table('provinces')
        ->insertGetId(['name' => 'SONORA', 'country_id' => $country_id]);

        DB::table('cities')->insert([
            ['name' => 'HERMOSILLO', 'province_id' => $province_id],
            ['name' => 'ALAMOS', 'province_id' => $province_id],
            ['name' => 'BENITO JUAREZ', 'province_id' => $province_id],
        ]);        

        $country_id = DB::table('countries')
        ->insertGetId(['name' => 'COLOMBIA']);

        $province_id = DB::table('provinces')
        ->insertGetId(['name' => 'ATLANTICO', 'country_id' => $country_id]);

        DB::table('cities')->insert([
            ['name' => 'BARRANQUILLA', 'province_id' => $province_id],
            ['name' => 'BARANOA', 'province_id' => $province_id],
            ['name' => 'SOLEDAD', 'province_id' => $province_id],
            ['name' => 'GALAPA', 'province_id' => $province_id],
        ]);

        $province_id = DB::table('provinces')
        ->insertGetId(['name' => 'ANTIOQUIA', 'country_id' => $country_id]);

        DB::table('cities')->insert([
            ['name' => 'MEDELLIN', 'province_id' => $province_id],
            ['name' => 'ENVIGADO', 'province_id' => $province_id],
            ['name' => 'ITAGUI', 'province_id' => $province_id],
            ['name' => 'BELLO', 'province_id' => $province_id],
        ]);

        $province_id = DB::table('provinces')
        ->insertGetId(['name' => 'CUNDINAMARCA', 'country_id' => $country_id]);

        DB::table('cities')->insert([
            ['name' => 'BOGOTA', 'province_id' => $province_id],
            ['name' => 'SOACHA', 'province_id' => $province_id],
            ['name' => 'GIRARDOT', 'province_id' => $province_id],
            ['name' => 'CHIA', 'province_id' => $province_id],
        ]);

    }
}
