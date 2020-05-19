<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClinicTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clinic', function (Blueprint $table) {
            $table->bigIncrements('ClinicId');
            $table->string('Name');
            $table->timestamp('CreatedOn');
            $table->tinyInteger('InstitutionId');
            $table->tinyInteger('ContactId');
            $table->string('HL7Type');
            $table->tinyInteger('IsDeleted');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clinic');
    }
}
