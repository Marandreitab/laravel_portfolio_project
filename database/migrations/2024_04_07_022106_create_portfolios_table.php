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
        Schema::create('portfolios', function (Blueprint $table) {
            $table->id();
            $table->string('nick');
            $table->string('image')->default('default.jpg');
            $table->string('docu');
            $table->text('intro')->default('NO RECORDS');
            $table->text('html1')->default('NO RECORDS');
            $table->text('css1')->default('NO RECORDS');
            $table->text('js1')->default('NO RECORDS');
            $table->text('boostrap')->default('NO RECORDS');
            $table->text('PHP1')->default('NO RECORDS');
            $table->text('laravel1')->default('NO RECORDS');
            $table->string('skill1')->default('NO RECORDS');
            $table->string('skill2')->default('NO RECORDS');
            $table->string('skill3')->default('NO RECORDS');
            $table->string('skill4')->default('NO RECORDS');
            $table->string('skill5')->default('NO RECORDS');
            $table->string('skill6')->default('NO RECORDS');
            $table->string('skill7')->default('NO RECORDS');
            $table->text('pinfo')->default('NO RECORDS');
            $table->text('achie')->default('NO RECORDS');
            $table->text('work1')->default('NO RECORDS');
            $table->text('work2')->default('NO RECORDS');
            $table->text('work3')->default('NO RECORDS');
            $table->text('work4')->default('NO RECORDS');
            $table->string('email1')->default('NO RECORDS');
            $table->string('fb1')->default('NO RECORDS');
            $table->string('phone1')->default('NO RECORDS');
            $table->string('emaillog')->default('NO RECORDS');
            $table->string('password')->default('NO RECORDS');
            $table->string('extra1')->default('NO RECORDS');
            $table->string('extra2')->default('NO RECORDS');
            $table->string('extra3')->default('NO RECORDS');
            $table->string('extra4')->default('NO RECORDS');
            $table->text('text1')->default('NO RECORDS');
            $table->text('text2')->default('NO RECORDS');
            $table->integer('extraint1')->default(0);
            $table->integer('extraint2')->default(0);
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
        Schema::dropIfExists('portfolios');
    }
};
