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
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->string('member_type', 20);
            $table->unsignedBigInteger('unique_id')->unique();
            $table->string('company_name', 30);
            $table->string('trading_name', 30);
            $table->unsignedBigInteger('phone_number');
            $table->text('address_line_one');
            $table->text('address_line_two');
            $table->string('city', 20);
            $table->string('county', 20)->index();
            $table->string('eircode', 8)->index();
            $table->string('priority', 20)->index();
            $table->string('exemption_reason', 30)->index();
            $table->string('collection_type', 20);
            $table->string('retailer_type', 20);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('members');
    }
};
