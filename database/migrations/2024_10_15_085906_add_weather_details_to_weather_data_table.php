<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('weather_data', function (Blueprint $table) {
            $table->string('daily_temperature');  // 最高/最低気温（カンマ区切りで保存）
            $table->string('precipitation_probability');  // 降水確率
            $table->string('wind_speed');  // 風速
            $table->string('weather_hourly_temp'); // 天気情報を保存
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('weather_data', function (Blueprint $table) {
        });
    }
};
