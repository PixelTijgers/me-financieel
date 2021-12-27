<?php

// Facades.
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCreditcardExpensesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('creditcard_expenses', function (Blueprint $table) {
            // Generate ID.
            $table->id();

            // Relations.
            $table->relateTo('company');

            // Table content.
            $table->decimal('cost', 10, 2);
            $table->enum('type', ['fixed', 'variable']);

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
        Schema::dropIfExists('creditcard_expenses');
    }
}
