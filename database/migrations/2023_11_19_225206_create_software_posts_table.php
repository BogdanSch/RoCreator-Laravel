<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('software_posts', function (Blueprint $table) {
            $table->id();
            $table->string('software_title');
            $table->text('software_content');
            $table->string('software_type');
            $table->string('software_image');
            $table->timestamp('publish_date')->useCurrent();
            $table->string('software_link');
            $table->boolean('software_available')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('software_posts');
    }
};