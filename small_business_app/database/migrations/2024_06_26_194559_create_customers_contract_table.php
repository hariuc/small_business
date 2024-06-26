<?php

use App\Application\Core\Enums\DatabaseTableEnums;
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
        Schema::create(DatabaseTableEnums::CUSTOMERS_CONTRACTS->value, function (Blueprint $table) {
            $table->uuid("id")->primary()->default(DB::raw('(UUID())'))->comment("");
            $table->string("name", length: 50)->default("")->comment("");

            $table->foreignUuid("customer_id")
                ->references("id")->on(DatabaseTableEnums::CUSTOMERS_TABLE->value)->restrictOnDelete();

            $table->foreignUuid("currency_id")
                ->references("id")->on(DatabaseTableEnums::CURRENCIES_TABLE->value)
                ->restrictOnDelete();

            $table->date("contract_date")->nullable()->comment("");

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
        Schema::dropIfExists(DatabaseTableEnums::CUSTOMERS_CONTRACTS->value);
    }
};
