<?php

use App\Models\Teszt;
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
        Schema::create('teszts', function (Blueprint $table) {
            $table->id();
            $table->string("kerdes");
            $table->string("v1");
            $table->string("v2");
            $table->string("v3");
            $table->string("v4");
            $table->string("helyes");
            $table->foreignId("kategoriaId")->references("id")->on("kategorias");
            $table->timestamps();
        });

        Teszt::create(['kerdes' => "A papírt milyen színű kukába gyűjtjük?", 'v1' => "kék", 'v2' => "piros", 'v3' => "szürke", 'v4' => "sárga", 'helyes' => "v1", 'kategoriaId' => 1]);
        Teszt::create(['kerdes' => "Melyek komposztálhatóak?", 'v1' => "zöldség - gyümölcs maradék, tojáshéj", 'v2' => "nagy ágak, fatörzsek, diófalevél", 'v3' => "fém, műanyag, vegyszeres dolgok", 'v4' => "ruhanemű, törlőruha, egyéb textilek", 'helyes' => "v1", 'kategoriaId' => 1]);
        Teszt::create(['kerdes' => "Fogmosásnál...", 'v1' => "elzárom a csapot, amikor épp a fogamat sikálom és nem kell víz", 'v2' => "nem zárom el a csapot, amíg a fogamat mosom, hogy lemossa a lehulló fogkrém habot, a mosdókagylóból", 'v3' => "kitekerem a csapot teljesen, mert miért ne", 'v4' => "csak akkor zárom el a csapot, amikor végeztema  fogmosással", 'helyes' => "v2", 'kategoriaId' => 1]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teszts');
    }
};
