<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInfosTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('infos', function (Blueprint $table) {
            // Creazione foreign key per relazione con tabella 'users'
            // $table->unsignedBigInteger('user_id');
            // $table->foreign('user_id')->references('id')->on('users');

            // Il codice qui sopra può essere riassunto in:
            $table->foreignId('user_id')->constrained()->onDelete('cascade')->onUpdate('cascade');

            // $table->id(); # non è necessario mantenerla, basta la FK
            $table->string('phone', 25);
            $table->text('avatar');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('infos');
    }
}
