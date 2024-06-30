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
        Schema::create(DatabaseTableEnums::BANKS_TABLE->value, function (Blueprint $table) {
            $table->uuid("id")->primary()->default(DB::raw('(UUID())'))->comment("");
            $table->string("bic", length: 12)->default("")->comment("");
            $table->string("name", length: 100)->default("")->comment("");
            $table->string("corr_bank_account", length: 20)->default("")->comment("");
            $table->string("city", length: 50)->default("")->comment("");
            $table->string("address", length: 100)->default("")->comment("");
            $table->string("phones", length: 100)->default("")->comment("");
            $table->timestamps();
            $table->softDeletes();

            $table->comment("");

            $table->unique(["bic"]);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists(DatabaseTableEnums::BANKS_TABLE->value);
    }
};
