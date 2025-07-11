<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('stripe_session_id')->unique(); // ID da sessão de checkout do Stripe
            $table->string('product_id')->nullable(); // ID do produto/preço do Stripe
            $table->decimal('amount', 8, 2); // Valor do pagamento
            $table->string('status')->default('paid'); // Status do pedido (ex: paid, refunded)
            $table->boolean('refunded')->default(false); // Indica se o pedido foi reembolsado
            $table->string('stripe_payment_intent_id')->nullable(); // Adicionado para facilitar reembolsos
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};