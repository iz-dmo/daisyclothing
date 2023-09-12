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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('voucherNo');
            $table->string('qty');
            $table->string('total');
            $table->string('paymentSlip');
            $table->unsignedBigInteger('payment_id');
            $table->foreign('payment_id')
                    ->references('id')
                    ->on('payments')
                    ->onDelete('cascade');
            $table->unsignedBigInteger('item_id');
            $table->foreign('item_id')
                    ->references('id')
                    ->on('items')
                    ->onDelete('cascade');
            $table->unsignedBigInteger('feature_id');
            $table->foreign('feature_id')
                    ->references('id')
                    ->on('features')
                    ->onDelete('cascade');
            $table->unsignedBigInteger('newitem_id');
            $table->foreign('newitem_id')
                    ->references('id')
                    ->on('newitems')
                    ->onDelete('cascade');
            $table->unsignedBigInteger('sale_id');
            $table->foreign('sale_id')
                    ->references('id')
                    ->on('sales')
                    ->onDelete('cascade');
            $table->unsignedBigInteger('hot_id');
            $table->foreign('hot_id')
                    ->references('id')
                    ->on('hots')
                    ->onDelete('cascade');
            $table->unsignedBigInteger('deal_id');
            $table->foreign('deal_id')
                    ->references('id')
                    ->on('deals')
                    ->onDelete('cascade');
            $table->unsignedBigInteger('topselling_id');
            $table->foreign('topselling_id')
                    ->references('id')
                    ->on('topsellings')
                    ->onDelete('cascade');
            $table->unsignedBigInteger('trend_id');
            $table->foreign('trend_id')
                    ->references('id')
                    ->on('trends')
                    ->onDelete('cascade');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')
                    ->references('id')
                    ->on('users')
                    ->onDelete('cascade');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};