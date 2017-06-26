<?php

use Illuminate\Database\Seeder;

class EstadoSeeder extends Seeder {
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
  	\DB::table('estados')->insert([
  		'id' => 1,
  		'descripcion' => 'Disponible',
  		]);
  	\DB::table('estados')->insert([
  		'id' => 2,
  		'descripcion' => 'Ocupado',
  		]);
  }
}
