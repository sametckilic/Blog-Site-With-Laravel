<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Infos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('infos', function (Blueprint $table) {
            $table->id();
            $table->string("sidebarName");
            $table->string("sidebarAbstract");
            $table->string("sidebarPhoto");
            $table->string("sidebarTwitter");
            $table->string("sidebarFacebook");
            $table->string("sidebarLinkedin");
            $table->string("sidebarInstagram");
            $table->string("aboutTitle");
            $table->longText("aboutMe");
            $table->string("contactAddress");
            $table->string("contactNumber");
            $table->string("contactEmail");
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('infos');
    }
}
