<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersLendsBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_lends_books', function (Blueprint $table) {
            $table->primary('USER_ID', 'BOOK_ID');
            $table->unsignedInteger('USER_ID'); 
            $table->unsignedInteger('BOOK_ID'); 
            $table->dateTime('lended_at'); 
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
        Schema::dropIfExists('users_lends_books');
    }
}
