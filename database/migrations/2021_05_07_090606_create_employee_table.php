<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee', function (Blueprint $table) {
            $table->id();
            $table->string('nip')->unique();
            $table->string('fullname');
            $table->string('gender');
            $table->string('birthplace');
            $table->date('birthdate');
            $table->text('address');
            $table->string('phone_number');
            $table->integer('work_unit_id');
            $table->integer('position_id');
            $table->date('entrydate');
            $table->smallInteger('status')->default(1);
            $table->bigInteger('created_by')->nullable();
            $table->bigInteger('updated_by')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employee');
    }
}
