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
                'video' => 'https://www.youtube.com/watch?v=sd5Rd4LRGgs&t=34s',
                'file' => 'clientes.xlsx',
                'validation' => 'clients', 
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
