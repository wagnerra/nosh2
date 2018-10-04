<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddMessageIdToImageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('practiceinfo', function (Blueprint $table) {
            $table->string('sms_provider', 255)->nullable();
            $table->string('sms_api_key', 255)->nullable();
            $table->string('sms_api_secret', 255)->nullable();
            $table->string('sms_phone_number', 255)->nullable();
            $table->string('sms_country_code', 255)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('practiceinfo', function (Blueprint $table) {
            $table->dropColumn('sms_provider');
            $table->dropColumn('sms_api_key');
            $table->dropColumn('sms_api_secret');
            $table->dropColumn('sms_phone_number');
            $table->dropColumn('sms_country_code');
        });
    }
}
