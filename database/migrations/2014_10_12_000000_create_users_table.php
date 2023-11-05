<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('raz_soc');
            $table->string('type_doc',20)->nullable();
            $table->string('nro_doc',25)->nullable();
            $table->string('phone',15)->nullable();
            $table->string('email',100)->unique();
            $table->string('depa',2)->nullable()->comment("departamento");
            $table->string('prov',4)->nullable()->comment("provincia");
            $table->string('dist',6)->nullable()->comment("distrito");
            $table->string('dire',255)->nullable()->comment("distrito");
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();
            $table->rememberToken();
            $table->string('google_id')->nullable();
            $table->enum('update_prof',["1","0","2"])->default("2")->comment("1:obligatorio,0:actualizado,2:nuevo");
            $table->timestamp('last_session')->nullable();
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
        Schema::dropIfExists('users');
    }
}
