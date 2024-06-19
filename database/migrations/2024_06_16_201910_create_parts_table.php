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
        Schema::create('parts', function (Blueprint $table) {
            $table->id();
            $table->string('partNumber');
            $table->text('partDescription');
            $table->string('vendorNumber');
            $table->string('vendorName');
            $table->integer('orderQuantity');
            $table->integer('receiveQuantity');
            $table->decimal('cost');
            $table->decimal('extendedCost');
            $table->decimal('dutyPct');
            $table->decimal('duty');
            $table->decimal('freightPct');
            $table->decimal('freight');
            $table->string('uom');
            $table->string('vendorPart');
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('parts');
    }
};
