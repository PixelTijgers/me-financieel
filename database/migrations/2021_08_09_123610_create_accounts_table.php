<?php

// Facades.
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accounts', function (Blueprint $table) {
            // Generate ID.
            $table->id();

            // Table content.
            $table->string('name');
            $table->string('bank_account')->unique();
            $table->decimal('balance',10, 2)->default(0);

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
        Schema::dropIfExists('accounts');
    }
}
