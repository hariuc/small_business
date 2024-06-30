<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use App\Application\Core\Enums\DatabaseTableEnums;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create(DatabaseTableEnums::FUNCTIONS->value, function (Blueprint $table) {
            $table->uuid("id")->primary()->default(DB::raw('(UUID())'))->comment("");
            $table->string("name", length: 100)->default("")->comment("");
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
        Schema::dropIfExists(DatabaseTableEnums::FUNCTIONS->value);
    }
};
