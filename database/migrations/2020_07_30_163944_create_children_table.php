<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChildrenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('children', function (Blueprint $table) {
            $table->id();
            $table->foreignId('parents_id')->constrained();
            $table->string('name');
            $table->integer('age');
            $table->date('birth_date')->nullable();
            $table->tinyInteger('status');
            $table->dateTime('last_activity')->default(NOW());
            $table->foreignId('spouse_id')->constrained('spouse');
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
        Schema::dropIfExists('children');
    }
}
