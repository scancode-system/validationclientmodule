<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Modules\Portal\Entities\Validation;

class InsertValidationClient extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Validation::create([
                'alias' => 'clientes',
                'module_name' => 'ValidationClient',
                'module_alias' => 'validationclient',
                'video' => 'https://www.youtube.com/embed/zpOULjyy-n8?rel=0',
                'file' => 'clientes.xlsx',
                'validation' => 'clients', 
                'import' => 'Client@import',
                'preference_order' => 1
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Validation::where('module_name', 'ValidationClient')->first()->delete();
    }
}
