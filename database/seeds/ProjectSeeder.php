<?php
 
 use Illuminate\Database\Seeder;
 use Illuminate\Support\Facades\DB;
 use Illuminate\Support\Facades\Hash;
 use Illuminate\Support\Str;
  

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        for ($i=0; $i < 20 ; $i++) { 
            DB::table('projects')->insert([
                'nombre' => 'NOMBRE ' . $i  ,
                'descripcion' =>'DECRIPCION' . Str::random(10),
            ]);
        }
       
 
    }
}
