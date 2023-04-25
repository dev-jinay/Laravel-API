<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUserCoumn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('first_name')->after('id');
            $table->string('last_name')->after('first_name');
            $table->string('mobile_number')->nullable()->after('email');
            $table->string('service')->after('mobile_number');
            $table->text('resume')->nullable()->after('service');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('url')->change();
            $table->dropColumn('first_name')->change();
            $table->dropColumn('last_name')->change();
            $table->dropColumn('mobile_number')->change();
            $table->dropColumn('service')->change();
            $table->dropColumn('resume')->change();
        });
    }
}
