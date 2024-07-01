<?php

use App\Application\Core\Enums\AccountTypeEnum;
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
        Schema::create(DatabaseTableEnums::BANKS_ACCOUNTS->value, function (Blueprint $table) {
            $table->uuid("id")->primary()->default(DB::raw('(UUID())'))->comment("");
            $table->string("name", length: 100)->default("")->comment("");
            $table->string("account", length: 20)->default("")->comment("");

            $table->foreignUuid("bank_id")
                ->references("id")->on(DatabaseTableEnums::BANKS_TABLE->value)->restrictOnDelete();

            $table->foreignUuid("customer_id")
                ->references("id")->on(DatabaseTableEnums::CUSTOMERS_TABLE->value)->restrictOnDelete();

            $table->enum("account_type", [AccountTypeEnum::TYPE1->value, AccountTypeEnum::TYPE2->value])
                ->default(AccountTypeEnum::TYPE1->value)->comment("");

            $table->foreignUuid("currency_id")
                ->references("id")->on(DatabaseTableEnums::CURRENCIES_TABLE->value)
                ->restrictOnDelete();

            $table->date("date_open")->nullable()->comment("");
            $table->date("date_close")->nullable()->comment("");

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
        Schema::dropIfExists(DatabaseTableEnums::BANKS_ACCOUNTS->value);
    }
};
