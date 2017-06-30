<?php

use Illuminate\Database\Seeder;

class TutorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('tutores')->insert([
  		'id' => 1,
  		'rut' => '12.236.235-8',
      'nombre' => 'Pepe',
      'apellido' => 'Apellido1',
      'telefono' => '676656765',
      'correo' => 'pepe.a@a.com',
  		]);
    \DB::table('tutores')->insert([
      'id' => 2,
      'rut' => '10.986.999-2',
      'nombre' => 'Superman',
      'apellido' => 'Batman',
      'telefono' => '8956486566',
      'correo' => 's.b@l.com',
      ]);
    \DB::table('tutores')->insert([
      'id' => 3,
      'rut' => '11.111.111-1',
      'nombre' => 'Juanito',
      'apellido' => 'Perez',
      'telefono' => '8744585696',
      'correo' => 's.b@l.com',
      ]);
    }
}