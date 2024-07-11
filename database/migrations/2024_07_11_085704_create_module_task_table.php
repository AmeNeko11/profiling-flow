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
        Schema::create('module_task', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('module_id')->index('module_task_module_id_foreign');
            $table->unsignedBigInteger('module_role_id')->index('module_task_module_role_id_foreign');
            $table->unsignedBigInteger('module_status_id')->index('module_task_module_status_id_foreign');
            $table->unsignedBigInteger('module_permission_id')->index('module_task_module_permission_id_foreign');
            $table->boolean('active')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('module_task');
    }
};
