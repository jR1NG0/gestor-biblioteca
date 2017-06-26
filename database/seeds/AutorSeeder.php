<?php

use Illuminate\Database\Seeder;

class AutorSeeder extends Seeder {
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
  	\DB::table('autores')->insert([
  		'id' => 1,
  		'nombre' => 'Edgar Allan',
      'apellido' => 'Poe',
  		]);
  	\DB::table('autores')->insert([
  		'id' => 2,
  		'nombre' => 'George',
      'apellido' => 'Martin',
  		]);
  	\DB::table('autores')->insert([
  		'id' => 3,
      'nombre' => 'Mark',
      'apellido' => 'Twain',
  		]);
  	\DB::table('autores')->insert([
  		'id' => 4,
      'nombre' => 'León',
      'apellido' => 'Tolstoi',
  		]);
    \DB::table('autores')->insert([
      'id' => 5,
      'nombre' => 'William',
      'apellido' => 'Shakespeare',
    ]);
  }
}
