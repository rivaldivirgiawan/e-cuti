<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLeaveTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leave', function (Blueprint $table) {
            $table->id();
            $table->integer('employee_id');
            $table->integer('leave_type_id');
            $table->string('reason')->nullable();
            $table->date('period_start');
            $table->date('period_end');
            $table->integer('days');
            $table->text('address');
            $table->string('phone');
            $table->integer('supervisor_id')->nullable();
            $table->smallInteger('status')->default(1);
            $table->smallInteger('status_approval')->default(5);
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
        Schema::dropIfExists('leave');
    }
}
