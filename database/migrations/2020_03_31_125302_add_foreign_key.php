
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// php artisan make:migration add_foreign_key
class AddForeignKey extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tasks', function (Blueprint $table) {
            $table -> bigInteger('employee_id') -> unsigned() -> index();
            $table -> foreign('employee_id', 'tasks_employees')
                   -> references('id')
                   -> onDelete('cascade')
                   -> on('employees');
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tasks', function (Blueprint $table) {
              $table -> dropForeign('tasks_employees');
              $table -> dropColumn('employee_id');
        });
    }
}
