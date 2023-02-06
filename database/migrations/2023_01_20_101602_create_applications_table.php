<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            $table->string('org_id');
            $table->string('appi_id');
            $table->string('legecy_type');
            $table->string('trade_type');
            $table->string('ward');
            $table->string('applicant_name_f');
            $table->string('applicant_name_l');
            $table->string('fh_f_name');
            $table->string('fh_l_name');
            $table->string('city');
            $table->string('zone');
            $table->string('mobile_number');
            $table->string('email');
            $table->string('property_id');
            $table->string('application_date');
            $table->string('firm_name');
            $table->string('firm_type');
            $table->string('plot_number');
            $table->string('road');
            $table->string('pincode');
            $table->string('district');
            $table->string('countary');
            $table->string('join_partner');
            $table->string('shop_type');
            $table->string('swami_img');
            $table->string('officer_img');
            $table->string('property_img');
            $table->string('tax_img');
            $table->string('id_proof_img');
            $table->string('affidevit_img');
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
        Schema::dropIfExists('applications');
    }
}
