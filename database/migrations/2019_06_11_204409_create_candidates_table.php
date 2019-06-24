<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCandidatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidates', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->unsignedBigInteger('ballot_id');
			$table->foreign('ballot_id')->references('id')->on('ballots')->onDelete('cascade');
            $table->string('position');
            $table->mediumText('img');
            $table->string('twitter');
            $table->string('facebook')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('url');
            $table->string('mail')->nullable();
            $table->boolean('approved')->default(false);
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
        Schema::dropIfExists('candidates');
    }
}
