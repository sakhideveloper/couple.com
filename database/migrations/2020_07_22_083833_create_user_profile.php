<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserProfile extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_profile', function (Blueprint $table) {
            $table->id();
            $table->string('cell');
            $table->string('education');
            $table->string('profession');
            $table->string('physical');
            $table->date('date_of_birth');
            $table->enum('marital',['divorcee','widow','unmarried']);
            $table->text('preferences');
            $table->timestamps();
            $table->foreignId('user_id')->constrained('users')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_profile');
    }
}
