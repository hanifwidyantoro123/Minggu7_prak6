<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RelasiKelasStudentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('students',function (Blueprint $table){
            $table->dropColumn('kelas');//menghapus kolom kelas
            $table->unsignedBigInteger('kelas_id')->nullable();//menambah kolom kelas_id
            $table->foreign('kelas_id')->references('id')->on('kelas');//menambahkan foreign keydi kolom kelas_id
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('students',function (Blueprint $table){
            $table->string('kelas');
            $table->dropForeign(['kelas_id']);
        });
    }
}
