<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        // 1. Ajouter 'order' et 'image' à services
        Schema::table('services', function (Blueprint $table) {
            if (!Schema::hasColumn('services', 'order')) {
                $table->integer('order')->default(0)->after('is_active');
            }
            if (!Schema::hasColumn('services', 'image')) {
                $table->string('image')->nullable()->after('icon');
            }
        });

        // 2. Ajouter 'featured', 'category', 'completion_date' à realisations
        Schema::table('realisations', function (Blueprint $table) {
            if (!Schema::hasColumn('realisations', 'featured')) {
                $table->boolean('featured')->default(false)->after('image');
            }
            if (!Schema::hasColumn('realisations', 'category')) {
                $table->string('category')->default('construction')->after('featured');
            }
            if (!Schema::hasColumn('realisations', 'completion_date')) {
                $table->date('completion_date')->nullable()->after('category');
            }
        });
    }

    public function down(): void
    {
        // Pour annuler si besoin
        Schema::table('services', function (Blueprint $table) {
            $table->dropColumn(['order', 'image']);
        });

        Schema::table('realisations', function (Blueprint $table) {
            $table->dropColumn(['featured', 'category', 'completion_date']);
        });
    }
};