<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('produits', function (Blueprint $table) {
            $table->id();// le champ id est deja present
            $table->string("name");
            $table->longtext("description")->nulllable();
            $table->double("price");
            $table->string("photo1");
            $table->string("photo2");
            // declaration de la clée etrangère
            $table->uns ignedBigInteger("category_id");
            $table->foreign("category_id")->references('id')->on('categories');
            $table->timestamps();
             // cette ligne de code génère déja deux champs : created_at et updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produits');
    }
};
