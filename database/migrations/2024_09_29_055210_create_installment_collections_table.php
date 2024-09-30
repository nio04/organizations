<?php

use App\Models\Installment;
use App\Models\Organization;
use App\Models\Subscription;
use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Psy\VersionUpdater\Installer;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void {
        Schema::create('installment_collections', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(Organization::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(Subscription::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(Installment::class)->constrained()->cascadeOnDelete();
            $table->date("payment_date");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {
        Schema::dropIfExists('installment_collections');
    }
};