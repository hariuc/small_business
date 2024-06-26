<?php

use App\Application\Core\Enums\DatabaseTableEnums;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use App\Application\Core\Enums\CustomerTypeEnum;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create(DatabaseTableEnums::CUSTOMERS_TABLE->value, function (Blueprint $table) {
            $table->uuid("id")->primary()->default(DB::raw('(UUID())'))->comment("");
            $table->string("name", length: 100)->default("")->comment("");
            $table->string("full_name", length: 100)->default("")->comment("");
            $table->enum("customer_type", [CustomerTypeEnum::TYPE1->value, CustomerTypeEnum::TYPE2->value])
                ->default(CustomerTypeEnum::TYPE1->value)->comment("");
            $table->string("fiscal_code", length: 13)->default("")->comment("");
            $table->string("vat_code", length: 13)->default("")->comment("");
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
        Schema::dropIfExists(DatabaseTableEnums::CUSTOMERS_TABLE->value);
    }
};
