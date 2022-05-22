<?php

use App\Models\ClassSchoolPrimary;
use App\Models\PrimaryStudent;
use App\Models\School;
use App\Models\SchoolYear;
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
        Schema::create('inscription_primaries', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(PrimaryStudent::class)->constrained();
            $table->foreignIdFor(SchoolYear::class)->constrained();
            $table->foreignIdFor(ClassSchoolPrimary::class)->constrained();
            $table->foreignIdFor(School::class)->constrained();
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
        Schema::dropIfExists('inscription_primaries');
    }
};
