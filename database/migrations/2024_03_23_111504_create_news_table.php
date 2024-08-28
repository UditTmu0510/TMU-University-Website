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
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->Integer('cd_id');
            $table->string('event_date');
            $table->string('event_title');
            $table->string('event_short_title');
            $table->string('event_description');
            $table->TEXT('event_full_description');
            $table->string('title_image');
            $table->string('title_image_tag');
            $table->string('ti_path');
            $table->string('ti_full_path');
            $table->string('event_image1');
            $table->string('event_image1_tag');
            $table->string('ei1_path');
            $table->string('ei1_full_path');
            $table->string('event_image2');
            $table->string('event_image2_tag');
            $table->string('ei2_path');
            $table->string('ei2_full_path');

            $table->string('event_image3');
            $table->string('event_image3_tag');
            $table->string('ei3_path');
            $table->string('ei3_full_path');

            $table->string('event_image4');
            $table->string('event_image4_tag');
            $table->string('ei4_path');
            $table->string('ei4_full_path');
            
            $table->string('event_image5');
            $table->string('event_image5_tag');
            $table->string('ei5_path');
            $table->string('ei5_full_path');

            $table->string('event_image6');
            $table->string('event_image6_tag');
            $table->string('ei6_path');
            $table->string('ei6_full_path');

            $table->string('category');
            $table->Integer('event_day');
            $table->Integer('event_month');
            $table->string('event_month_name');
            $table->Integer('event_year');
            $table->char('display_main', 2);
            $table->char('status', 2);
            $table->char('posted_at');
            $table->char('n_slug');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('news');
    }
};
