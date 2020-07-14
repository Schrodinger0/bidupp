<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Auctioneer extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('newsletter', function (Blueprint $table) {
            $table->id();
            $table->string('Name');
            $table->string('email');
            $table->string('EntreprisePos');
            $table->string('EntrepriseNom');
            $table->string('SiteWeb');
            $table->integer('phone');
            $table->string('AdrFis');
            $table->string('AdrMat');
            $table->text('description');

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
        //
    }
}
