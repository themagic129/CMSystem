<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->increments('id');            
            $table->string('nombre');
            $table->string('apellido');
            $table->string('cedula')->unique();
            $table->string('direccion');            
            $table->string('telefono')->unique();
            $table->enum('status', ['activo', 'inactivo']);
            $table->timestamp('email_verified_at')->nullable();     
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
        Schema::dropIfExists('customers');
    }
}
