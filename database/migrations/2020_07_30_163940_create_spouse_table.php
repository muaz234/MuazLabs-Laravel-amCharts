<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpouseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('spouse', function (Blueprint $table) {
            $table->id();
            $table->foreignId('parent_id')->constrained();
            $table->string('name');
            $table->integer('age');
            $table->date('birth_date')->nullable();
            $table->date('marriage_date')->nullable();
            $table->tinyInteger('status');
            $table->dateTime('last_activity')->default(NOW());
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
        Schema::dropIfExists('spouse');
    }
}
