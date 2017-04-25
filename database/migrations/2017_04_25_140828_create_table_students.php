<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableStudents extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //create or modify tables
        Schema::create(/* table*/ 'students', /* function*/ function(Blueprint $table) {
            $table->increments('id'); // id INT NOT NULL AUTO_INCREMENT
            $table->string('first_name', 300); // first_name VARCHAR(300) NOT NULL
            $table->string('description')->nullable(); // description VARCHAR(255)--default 255 and NOT NULL
            // Audit columns created_at, updated_at DATETIME
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
        // drop tables, or undo changes
        Schema::drop('students');
    }
}
