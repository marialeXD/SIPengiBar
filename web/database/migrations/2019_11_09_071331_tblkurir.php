<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Tblkurir extends Migration
{
         /**
         * Run the migrations.
         *
         * @return void
         */
        public function up()
        {
            Schema::create('tblkurir', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->bigIncrements('id');
                $table->string("nama",50);
                $table->string("alamat",50);
                $table->string("telepon",25);
                $table->string("email",50);
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
            Schema::dropIfExists('tblkurir');
        }
    }
    