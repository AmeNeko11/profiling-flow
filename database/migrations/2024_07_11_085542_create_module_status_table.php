<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('module_status', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('module_id')->index('module_status_module_id_foreign');
            $table->integer('status_index')->comment('Numbering start from 1 until end, easy to see the flow if using this instead of primary key');
            $table->string('status_name')->nullable();
            $table->text('status_description')->nullable();
            $table->string('status_color')->nullable()->default('primary');
            $table->boolean('active')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('module_status');
    }
};
