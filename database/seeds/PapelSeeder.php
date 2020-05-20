<?php

use Illuminate\Database\Seeder;
use App\Papel;

class PapelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $p1 = Papel::firstOrCreate([
        'nome' => 'Admin',
        'descricao' => 'Acesso total ao sistema'
      ]);

      $p2 = Papel::firstOrCreate([
        'nome' => 'Alimentador',
        'descricao' => 'Alimenta o site com conteúdos'
      ]);


      echo "Papeis criados com sucesso!";
    }
}
