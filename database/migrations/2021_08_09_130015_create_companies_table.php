<?php

// Facades.
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            // Generate ID.
            $table->id();

            // Table content.
            $table->string('name');
            $table->enum('type',
                [
                    'subscription',
                    'mortgage',
                    'energy',
                    'water',
                    'internet',
                    'loan',
                    'insurance',
                    'refund',
                    'tax',
                ]);

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
        Schema::dropIfExists('companies');
    }
}
