<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('title', 10);
            $table->string('firstname', 100);
            $table->string('lasstname', 100);
            $table->string('address', 100);
            $table->string('postalcode', 10);
            $table->string('city', 50);
            $table->string('province', 50)->nullable();
            $table->string('email', 50)->unique();
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
        Schema::dropIfExists('clients', function(Blueprint $table) {
            $table->dropColumn('email');
        });
    }
}
