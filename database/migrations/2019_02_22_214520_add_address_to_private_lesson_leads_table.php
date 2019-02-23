<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddAddressToPrivateLessonLeadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('private_lesson_leads', function (Blueprint $table) {
            $table->longText('address')->nullable()->after('location');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('private_lesson_leads', function (Blueprint $table) {
            $table->dropColumn('address');
        });
    }
}
