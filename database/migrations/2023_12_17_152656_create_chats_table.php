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
        Schema::create('chats', function (Blueprint $table) {
            $table->id();
            $table->foreignId(column:'sender_id')->constrained(table:'users')->onDelete(action:'cascade');
            $table->foreignId(column:'receiver_id')->constrained(table:'users')->onDelete(action:'cascade');
            $table->longText(column:'message');
            $table->boolean(column:'is_read')->default(value:false);
            $table->boolean(column:'is_edited')->default(value:false);
            $table->boolean(column:'is_deleted')->default(value:false);
            $table->boolean(column:'deleted_from_sender')->default(value:false);
            $table->boolean(column:'deleted_from_receiver')->default(value:false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chats');
    }
};
