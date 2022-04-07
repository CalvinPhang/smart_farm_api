<?php

namespace Database\Seeders;

use App\Models\ActuatorTable as ModelsActuatorTable;
use Illuminate\Database\Seeder;

class ActuatorTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $led = [
            'actuator' => 'LED',
            'value' => '1'
        ];

        $servo = [
            'actuator' => 'servo',
            'value' => '0'
        ];

        $motor = [
            'actuator' => 'motor',
            'value' => '0'
        ];

        ModelsActuatorTable::create($led);
        ModelsActuatorTable::create($servo);
        ModelsActuatorTable::create($motor);
    }
}
