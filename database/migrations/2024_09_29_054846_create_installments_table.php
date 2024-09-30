<?php

use App\Models\Organization;
use App\Models\Subscription;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use NunoMaduro\Collision\Adapters\Phpunit\Subscribers\Subscriber;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void {
        Schema::create('installments', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Organization::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(Subscription::class)->constrained()->cascadeOnDelete();
            $table->integer("collectable_amount");
            $table->date("due_date");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {
        Schema::dropIfExists('installments');
    }
};