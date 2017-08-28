<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // TODO: добавить префикс
        Schema::create('pages', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();

            $table->string('header')->comment('Заголовок страницы');
            $table->text('content')->comment('Текст страницы');
            $table->text('slug')->comment('Слаг'); // TODO: unique
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pages');
    }
}
