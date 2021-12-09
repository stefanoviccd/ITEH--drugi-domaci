<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeFirstnameToNameInPresentersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('presenters', function (Blueprint $table) {
            $table->renameColumn("firstname", "name");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('presenters', function (Blueprint $table) {
            $table->renameColumn("name","firstname");
        });
    }
}
