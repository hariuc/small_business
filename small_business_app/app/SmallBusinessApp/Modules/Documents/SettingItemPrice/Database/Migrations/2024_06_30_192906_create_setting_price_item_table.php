<?php

use App\Application\Core\Enums\DatabaseTableEnums;
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
    {
        Schema::create(DatabaseTableEnums::SETTINGS_PRICES_ITEM->value, function (Blueprint $table) {
            $table->uuid("id")->primary()->default(DB::raw('(UUID())'))->comment("");

            $table->foreignUuid("setting_price_id")
                ->references("id")->on(DatabaseTableEnums::SETTINGS_PRICES->value)->restrictOnDelete();

            $table->foreignUuid("item_id")
                ->references("id")->on(DatabaseTableEnums::ITEMS->value)->restrictOnDelete();

            $table->float("price", 15, 2)->default(0.0)->comment("");

            $table->timestamps();
            $table->softDeletes();

            $table->comment("");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists(DatabaseTableEnums::SETTINGS_PRICES_ITEM->value);
    }
};
