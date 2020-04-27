<?php

use Illuminate\Database\Seeder;
use App\TipoSanguineo;

class TipoSanguineoSeeder extends Seeder
{
    private $tipos = [
        [
            "id" => 1,
            "tipo_sanguineo" => "A+"
        ],
        [
            "id" => 2,
            "tipo_sanguineo" => "A-"
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
            dd($tipo);
        }
    }
}
