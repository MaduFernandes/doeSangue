<?php

use Illuminate\Database\Seeder;
use App\TipoSanguineo;

class TipoSanguineoSeeder extends Seeder
{
    private $tipos = [
        [
            "id" => 1,
            "descricao" => "A+"
        ],
        [
            "id" => 2,
            "descricao" => "A-"
        ],
        [
            "id" => 3,
            "descricao" => "B+"   
        ],
        [
            "id" => 4,
            "descricao" => "B-"   
        ],
        [
            "id" => 5,
            "descricao" => "O+"   
        ],
        [
            "id" => 6,
            "descricao" => "O-"   
        ],
        [
            "id" => 7,
            "descricao" => "AB+"   
        ],
        [
            "id" => 8,
            "descricao" => "AB-"   
        ]
    ];
    
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach($this->tipos as $tipo) {
            $tipoSanguineo = TipoSanguineo::find($tipo["id"]);

            if($tipoSanguineo) {
                //Atualizar
                $tipoSanguineo->descricao = $tipo["descricao"];
                $tipoSanguineo->save();
            } else {
                //Criar um registro
                TipoSanguineo::create($tipo);
            }
        }
    }
}
