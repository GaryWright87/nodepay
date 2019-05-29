<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMerchantGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('merchant_groups', function (Blueprint $table)
        {
            $table->increments('id');

            $table->string('name')->unique();
            $table->string('description')->nullable();
            $table->double('fee', 10, 2)->nullable()->default(0.00);
            $table->enum('is_default', ['No', 'Yes'])->default('No');

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
        Schema::dropIfExists('merchant_groups');
    }
}
