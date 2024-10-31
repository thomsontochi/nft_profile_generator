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
        Schema::create('nfts', function (Blueprint $table) {
            $table->id();
            $table->string('token_id')->nullable();
            $table->string('name');
            $table->text('description')->nullable();
            $table->string('image_url');
            $table->string('ipfs_hash')->nullable();
            $table->string('metadata_url')->nullable();
            $table->string('owner_address')->nullable();
            $table->enum('status', ['pending', 'minted', 'failed'])->default('pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nfts');
    }
};
