<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::dropIfExists('blogs');

        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->longText('Title');
            // In our database, we need to leave a field for the foregin key. 
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            // $table->integer('user_id')->unsigned();
			// $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->longText('Subtitle');
            $table->string('picture')->nullable();
            $table->longText('Contentone');
            $table->longText('Heading');
            $table->longText('Contenttwo');
            $table->longText('Conclusion');
            $table->longText('Contentthree');
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
        Schema::dropIfExists('blogs');
    }
};
