<?php

use App\Models\PrimaryStudent;
use App\Models\School;
use App\Models\SchoolYear;
use App\Models\Tarif;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payment_primaries', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(PrimaryStudent::class)->constrained();
            $table->foreignIdFor(SchoolYear::class)->constrained();
            $table->foreignIdFor(School::class)->constrained();
            $table->foreignIdFor(Tarif::class)->constrained();
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
        Schema::dropIfExists('payment_primaries');
    }
};
