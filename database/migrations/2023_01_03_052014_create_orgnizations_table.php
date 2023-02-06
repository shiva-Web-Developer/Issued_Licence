<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrgnizationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orgnizations', function (Blueprint $table) {
            $table->id();
            $table->string('org_logo');
            $table->string('org_name');
            $table->string('org_id');
            $table->string('address');
            $table->string('mobile_number');
            $table->string('username');
            $table->string('email');
            $table->string('password');
            $table->string('status');
            $table->string('role');
            $table->string('current_timee');
            $table->string('is_Deleted');
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
        Schema::dropIfExists('orgnizations');
    }
}
