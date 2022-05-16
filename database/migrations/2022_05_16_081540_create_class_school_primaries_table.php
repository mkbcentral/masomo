<?php

use App\Models\School;
use App\Models\User;
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
        Schema::create('class_school_primaries', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignIdFor(School::class)->constrained();
            $table->foreignIdFor(User::class)->nullable()->constrained();
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
        Schema::dropIfExists('class_school_primaries');
    }
};
