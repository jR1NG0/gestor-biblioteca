<?php

use Illuminate\Database\Seeder;

class GeneroSeeder extends Seeder {
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
  	\DB::table('generos')->insert([
  		'id' => 1,
  		'descripcion' => 'Terror',
  		]);
  	\DB::table('generos')->insert([
  		'id' => 2,
  		'descripcion' => 'Comedia',
  		]);
  	\DB::table('generos')->insert([
  		'id' => 3,
  		'descripcion' => 'Drama',
  		]);
  	\DB::table('generos')->insert([
  		'id' => 4,
  		'descripcion' => 'Acción',
  		]);

    
  }
}
