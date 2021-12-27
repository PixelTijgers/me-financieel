<?php

// Facades.
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDepositsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deposits', function (Blueprint $table) {
            // Generate ID.
            $table->id();

            // Relations.
            $table->relateTo('account');
            $table->relateTo('company');

            // Table content.
            $table->decimal('cost', 10, 2);
            $table->enum('type', ['allowance', 'salary', 'transfer']);

            // Generate timestamps (created_at, updated_at)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('deposits');
    }
}
