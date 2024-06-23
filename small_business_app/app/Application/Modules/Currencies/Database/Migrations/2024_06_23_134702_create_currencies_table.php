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
        Schema::create(DatabaseTableEnums::CURRENCIES_TABLE->value, function (Blueprint $table) {
            $table->uuid("id")->primary()->default(DB::raw('(UUID())'))->comment("");
            $table->string("code", length: 3)->default("")->comment("");
            $table->string("name", length: 12)->default("")->comment("");
            $table->string("full_name", length: 12)->default("")->comment("");
            $table->timestamps();
            $table->softDeletes();

            $table->comment("");

            $table->unique(["code"]);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists(DatabaseTableEnums::CURRENCIES_TABLE->value);
    }
};
