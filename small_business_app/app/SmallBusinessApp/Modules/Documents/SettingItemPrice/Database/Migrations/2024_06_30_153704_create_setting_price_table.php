<?php

namespace SmartBusinessApp\Documents\SettingPrice\DataBase;

use App\SmallBusinessApp\Core\Enums\DatabaseTableEnums;
use Carbon\Carbon;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create(DatabaseTableEnums::SETTINGS_PRICES->value, function (Blueprint $table) {
            $table->uuid("id")->primary()->default(DB::raw('(UUID())'))->comment("");
            $table->dateTime("date")->default(Carbon::now())->comment("");
            $table->boolean("valid")->default(false)->comment("");

            $table->foreignId("user_id")
                ->references("id")->on(DatabaseTableEnums::USERS->value)->restrictOnDelete();


            $table->foreignUuid("type_price_id")
                ->references("id")->on(DatabaseTableEnums::TYPE_PRICES->value)->restrictOnDelete();

            $table->string("comment", 100)->default("")->comment("");

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
        Schema::dropIfExists(DatabaseTableEnums::SETTINGS_PRICES->value);
    }
};
