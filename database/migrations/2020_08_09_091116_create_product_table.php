<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->increments('product_id');
            $table->string('product_name');
            $table->string('product_description');
            $table->string('product_image');
            $table->timestamps();
        });

        DB::table('product')->insert([
            'product_name' => 'Kopi Aceh Gayo',
            'product_description' => 'Kopi Jenis Robusta',
            'product_image' => 'https://www.sentrakopi.com/wp-content/uploads/2017/05/aceh-gayo-1kg-2.jpg',
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product');
    }
}
