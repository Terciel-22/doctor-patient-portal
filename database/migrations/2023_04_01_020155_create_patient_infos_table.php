<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient_infos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')
                ->constrained()
                ->onDelete('cascade')
                ->unique();
            $table->date('birthdate');
            $table->string('patient_phone');
            $table->string('gender');
            $table->string('address');
            $table->string('city');
            $table->string('zip');
            $table->string('ssn')->nullable();
            $table->string('occupation')->nullable();
            $table->string('employer')->nullable();
            $table->string('marital_status');
            $table->string('spouse_name')->nullable();
            $table->string('emergency_contact');
            $table->string('emergency_relationship');
            $table->string('emergency_contact_phone');
            $table->string('parent_name')->nullable();
            $table->string('parent_phone')->nullable();
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
        Schema::dropIfExists('patient_infos');
    }
};
