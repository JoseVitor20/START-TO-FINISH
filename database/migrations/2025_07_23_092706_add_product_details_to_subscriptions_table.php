        <?php

        use Illuminate\Database\Migrations\Migration;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Support\Facades\Schema;

        return new class extends Migration
        {
            public function up(): void
            {
                Schema::table('subscriptions', function (Blueprint $table) {
                    // Adiciona a nova coluna para armazenar o payload completo da fatura
                    // Usamos 'json' para que o Laravel trate como array/objeto automaticamente via casts
                    $table->json('product_details')->nullable()->after('type');
                    // Ou use $table->longText('product_details')->nullable()->after('product_details');
                    // se preferir ou se tiver problemas com o tipo 'json' na sua versão do MySQL/MariaDB.
                });
            }

            public function down(): void
            {
                Schema::table('subscriptions', function (Blueprint $table) {
                    $table->dropColumn('product_details');
                });
            }
        };