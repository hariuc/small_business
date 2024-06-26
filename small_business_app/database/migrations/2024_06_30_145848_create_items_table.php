<?php

use App\Application\Core\Enums\DatabaseTableEnums;
use App\Application\Core\Enums\ItemTypeEnum;
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
        Schema::create(DatabaseTableEnums::ITEMS->value, function (Blueprint $table) {
            $table->uuid("id")->primary()->default(DB::raw('(UUID())'))->comment("");
            $table->string("name", length: 100)->default("")->comment("");
            $table->string("full_name", length: 100)->default("")->comment("");
            $table->string("vendor_code", length: 25)->default("")->comment("");
            $table->enum("nomenclature_type", [ItemTypeEnum::TYPE1->value, ItemTypeEnum::TYPE2->value])
                ->default(ItemTypeEnum::TYPE1->value)->comment("");

            $table->foreignUuid("category_id")
                ->references("id")->on(DatabaseTableEnums::CATEGORIES->value)->restrictOnDelete();

            $table->foreignUuid("unit_id")
                ->references("id")->on(DatabaseTableEnums::UNIT_CLASSIFIER->value)->restrictOnDelete();



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
        Schema::dropIfExists(DatabaseTableEnums::ITEMS->value);
    }
};
