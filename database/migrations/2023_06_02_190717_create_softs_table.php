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
        Schema::create('softs', function (Blueprint $table) {
            $table->id();
            $table->string('soft_title');
            $table->text('soft_content');
            $table->string('soft_type');
            $table->string('soft_image');
            $table->date('publish_date');
            $table->string('soft_link');
            $table->boolean('soft_available');
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
        Schema::dropIfExists('softs');
    }
};
