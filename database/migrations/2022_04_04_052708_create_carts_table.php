<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
public function up()
{
Schema::create('carts', function (Blueprint $table) {
$table->id();
$table->foreignId('user_id')->contrained();
$table->foreignId('product_id')->contrained();
$table->string('quantity')->default(1);
$table->string('price')->nullable();
$table->string('total')->nullable();
$table->timestamps();
});
}
public function down()
{
Schema::dropIfExists('carts');
}
};
