<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('title', 255);
            $table->string('isbn');
            $table->string('num_page', 5);
            $table->date('publish_date');
            $table->string('image');  //text
            $table->longText('sypnosis');
            $table->longText('review');
            $table->string('qualification', 1); //int
            $table->date('start_date');
            $table->date('end_date');
            $table->string('format_type', 8);
            $table->longText('notes', 8);
            $table->string('collection', 255);
            $table->string('volume', 8);    //int
            
            $table->foreignId('author_id')->usigned()->index();
            $table->foreign('author_id')->references('id')->on('authors');
            $table->date('created_at');
            $table->date('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
}
