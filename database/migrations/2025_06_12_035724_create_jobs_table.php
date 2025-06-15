<?php

use App\Models\Employer;

use App\Models\JobsCategory;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Employer::class);
            $table->foreignIdFor(JobsCategory::class);
            $table->string('title');
            $table->string('location');
            $table->string('company_name');
            $table->string('salary');
            $table->text('description');
            $table->string('schedule')->default("Full Time");
            $table->string('work_loc')->default("On Premise");
            $table->string('url');
            $table->boolean('featured')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jobs');
    }
};
