<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('pulse_entries', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->string('key')->nullable();
            $table->longText('value')->nullable();
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('pulse_aggregates', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->string('key')->nullable();
            $table->string('period');
            $table->unsignedBigInteger('count')->default(0);
            $table->double('sum')->nullable();
            $table->double('min')->nullable();
            $table->double('max')->nullable();
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('pulse_values', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->string('key')->nullable();
            $table->double('value');
            $table->timestamp('created_at')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pulse_values');
        Schema::dropIfExists('pulse_aggregates');
        Schema::dropIfExists('pulse_entries');
    }
};
