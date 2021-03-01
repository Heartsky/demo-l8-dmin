<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('internal_id');
            $table->bigInteger('company_id');
            $table->bigInteger('job_type_id');
            $table->bigInteger('staff_id');
            $table->bigInteger('customer_id');
            $table->bigInteger('staff_code');
            $table->string('label');
            $table->string('description');
            $table->string('spend_time');
            $table->date('start_time');
            $table->date('end_time');
            $table->date('complete_time');
            $table->date('last_update');
            $table->string('tracking_staff');
            $table->string('status');
            $table->string('bukken_koodo');
            $table->string('bukkenmei');
            $table->string('kouji_koodo');
            $table->string('tokuisakimei');
            $table->string('hacchyuumoto');
            $table->string('kakou_koujou');
            $table->string('shiten');
            $table->string('chiku');
            $table->string('menseki');
            $table->string('kaisuu');
            $table->string('shiyou');
            $table->string('kouhou');
            $table->string('cad');
            $table->string('kiso');
            $table->string('kishu');
            $table->string('tantousha');
            $table->date('uketsuke');
            $table->date('teisei');
            $table->string('shounin');
            $table->string('bikou');
            $table->string('hosanin');
            $table->string('hosawariai');
            $table->string('sagyou_jikan');
            $table->string('nani_keisuu');
            $table->string('kibo_keisuu');
            $table->string('tsubosuu');
            $table->string('chekkusha');
            $table->string('kibou_nouki');
            $table->string('henkyaku_hi');
            $table->string('hacchyuu_naiyou');
            $table->string('chekkku jikan');
            $table->string('naniten');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jobs');
    }
}
