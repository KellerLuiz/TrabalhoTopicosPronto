<?php
use Illuminate\Database\Seeder;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(atividadesTableSeeder::class);
        $this->call(usuarioTableSeeder::class);
        $this->call(exercicioTableSeeder::class);
        $this->call(mensagensTableSeeder::class);
        
        
    }
}


