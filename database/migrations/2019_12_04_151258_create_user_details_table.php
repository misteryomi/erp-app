<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id');
            $table->integer('department_id');
            $table->integer('unit_id');
            $table->string('location')->nullable();
            $table->string('phone');
            $table->string('state_of_origin');
            $table->string('marital_status');
            $table->string('bio');
            $table->string('emergency_contact_person');
            $table->string('emergency_contact_phone');
            $table->string('salary_account_no');
            $table->string('salary_account_bank');
            $table->string('salary_account_name');
            $table->string('intl_passport_no');
            $table->string('pension_pin');
            $table->string('pension_admin');
            $table->string('office_phone');
            $table->timestamp('date_employed');
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
        Schema::dropIfExists('user_details');
    }
}
