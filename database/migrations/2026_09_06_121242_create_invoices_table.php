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
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->string('number')->unique();
            $table->unsignedBigInteger('customerId');
            $table->foreign('customerId')->references('id')->on('customers')->onDelete('cascade');
            $table->date('date');
            $table->date('dueDate');
            $table->string('reference')->nullable();
            $table->text('termsAndConditions')->nullable();
            $table->double('subTotal', 15, 2);
            $table->double('discount', 15, 2)->default(0);
            $table->double('total', 15, 2)->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoices');
    }
};
