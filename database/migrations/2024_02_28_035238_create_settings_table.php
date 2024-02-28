<?php

use App\Models\setting;
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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('key');
            $table->string('label');
            $table->string('value');
            $table->string('type');
            $table->timestamps();
        });

        setting::create([
            'key'=>'_site_nama',
            'label'=>'Judul situs',
            'value'=>'Website sederhaa',
            'type'=>'text',
        ]);

        setting::create([
            'key'=>'_location',
            'label'=>'Alamat kantor',
            'value'=>'Subang, jawa barat, indonesia',
            'type'=>'text',
        ]);

        setting::create([
            'key'=>'_Instagram',
            'label'=>'instagram',
            'value'=>'https://www.instagram.com/midun_ahmad17/',
            'type'=>'text',
        ]);
        setting::create([
            'key'=>'_Github',
            'label'=>'github',
            'value'=>'https://github.com/acountings',
            'type'=>'text',
        ]);
        setting::create([
            'key'=>'_facebook',
            'label'=>'facebook',
            'value'=>'https://www.facebook.com/sekararat.lou',
            'type'=>'text',
        ]);
        setting::create([
            'key'=>'_site_description',
            'label'=>'Site Description',
            'value'=>'website Sederhana, dengan admin filament, untuk mu',
            'type'=>'text',
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
