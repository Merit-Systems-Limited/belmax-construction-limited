<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('companyName')->default('Belmax Company Limited');
            $table->string('email')->default('info@belmaxconstruction.co.ke');
            $table->string('phone')->default('+254704789371');
            $table->string('officeTime')->default('08:00 AM 05:00 PM');
            $table->string('officeAddress')->default('Kapsoya Eldoret');
            $table->string('city')->default('Eldoret');
            $table->string('town')->default('Eldoret');
            $table->string('boxAddress')->default('6040');
            $table->string('code')->default('30100');
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
        Schema::dropIfExists('settings');
    }
}