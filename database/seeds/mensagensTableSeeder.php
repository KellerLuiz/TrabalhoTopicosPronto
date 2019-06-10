<?php

use Illuminate\Database\Seeder;
use App\mensagens;

class mensagensTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    
        {
            mensagens::create([
                'titulo' => 'Alo galera',
                'texto' => 'preciso que todos prestem atenção nisso',
                'autor' => 'Luiz Keller',
                'user_id' => 1 ,
                'atividade_id' => 1
            ]);
    
            mensagens::create([
                'titulo' => 'teste de sOftware',
                'texto' => 'será testado o software logologo',
                'autor' => 'Luiz Keller',
                'user_id' => 1,
                'atividade_id' => 1
            ]);

            mensagens::create([
                'titulo' => 'Trabalho ',
                'texto' => 'Segunda dia 13',
                'autor' => 'Tiago',
                'user_id' => 1,
                'atividade_id' => 1
            ]);


    
        }
    
}
