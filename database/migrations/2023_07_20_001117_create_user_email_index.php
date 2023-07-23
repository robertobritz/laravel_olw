<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    { //unprepared ->serve apra rodar comandos direto no DB, sem utilizar variáveis
       DB::unprepared("CREATE UNIQUE INDEX user_email_index on users(email) WHERE deleted_at IS NULL"); //COMANDO SQL QUE SÓ FUNCINA O NO POSTGRESS
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function(Blueprint $table){
            $table->dropIndex('user_email_index');
        });
    }
};
