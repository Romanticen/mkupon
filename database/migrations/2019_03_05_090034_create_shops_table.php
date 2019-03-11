<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shops', function (Blueprint $table) {
            $table->integer('id')->nullable(false)->autoIncrement()->unique();
            $table->string('shop_name', 120)->nullable(false)->unique();
            $table->string('shop_address', 255)->nullable(false);
            $table->string('shop_town', 20)->nullable(false);
            $table->string('shop_country', 20)->nullable(false)->default('Macedonia');
            $table->string('shop_phone', 40)->nullable(false);
            $table->string('shop_email', 50);
            $table->text('shop_worktime');
            $table->text('shop_info');
            $table->boolean('shop_banned')->default(0);
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
        //
    }
}
