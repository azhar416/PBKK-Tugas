<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->foreignId('category_id');
            $table->string('slug')->unique();
            $table->string('author');
            $table->text('body');
            $table->string('excerpt');
            $table->timestamp('publish_at')->nullable();
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
        Schema::dropIfExists('articles');
    }
};

// Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas rem illo atque eveniet eum qui asperiores iusto hic explicabo, ullam harum aliquam deserunt tempora repudiandae ducimus odio provident. Et perspiciatis voluptas dolorum ratione! Velit accusantium temporibus repellat corrupti! Culpa dolorum, corrupti omnis sint expedita provident quo ipsa, cum, adipisci quaerat quod officia amet? Minima aliquam voluptates dolor, maxime odio sequi numquam? Autem sed reprehenderit dolor illum. Quam distinctio odit nihil voluptas animi harum perferendis doloremque illo aliquam ipsa id eveniet temporibus beatae, porro molestias inventore recusandae ea nulla voluptatum magni eaque sequi! Aliquam quos consequuntur soluta est, quod nulla laudantium?