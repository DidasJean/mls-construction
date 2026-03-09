<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('contact_messages', function (Blueprint $table) {
            if (!Schema::hasColumn('contact_messages', 'status')) {
                $table->string('status')->default('unread')->after('message');
            }
        });

        Schema::table('realisations', function (Blueprint $table) {
            if (!Schema::hasColumn('realisations', 'surface')) {
                $table->string('surface')->nullable()->after('image');
            }
            if (!Schema::hasColumn('realisations', 'duree')) {
                $table->string('duree')->nullable()->after('surface');
            }
        });
    }

    public function down(): void
    {
        Schema::table('contact_messages', function (Blueprint $table) {
            if (Schema::hasColumn('contact_messages', 'status')) {
                $table->dropColumn('status');
            }
        });

        Schema::table('realisations', function (Blueprint $table) {
            $drops = [];
            if (Schema::hasColumn('realisations', 'surface')) {
                $drops[] = 'surface';
            }
            if (Schema::hasColumn('realisations', 'duree')) {
                $drops[] = 'duree';
            }
            if (!empty($drops)) {
                $table->dropColumn($drops);
            }
        });
    }
};
