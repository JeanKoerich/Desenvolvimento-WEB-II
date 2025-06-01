<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterClienteIdNullableOnLivrosTable extends Migration
{
    public function up()
    {
        Schema::table('livros', function (Blueprint $table) {
            $table->unsignedBigInteger('cliente_id')->nullable()->change();
        });
    }

    public function down()
    {
        Schema::table('livros', function (Blueprint $table) {
            $table->unsignedBigInteger('cliente_id')->nullable(false)->change();
        });
    }
}