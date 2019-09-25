<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ModuleArticle extends Migration
{
    public function up()
    {   
        Schema::enableForeignKeyConstraints();
        Schema::create('articles', function (Blueprint $table) {
            // this will create an id, a "published" column, and soft delete and timestamps columns
            createDefaultTableFields($table);
        });
        Schema::create('article_translations', function (Blueprint $table) {
            createDefaultTranslationsTableFields($table, 'article');
            $table->string('title', 200)->nullable();
            $table->string('subtitle', 200)->nullable(); 
            $table->text('description')->nullable();
            $table->string('color', 8)->nullable();
            $table->integer('weight')->nullable();
            $table->double('price', 6, 2); 
            $table->unsignedInteger('ref_article_id')->unsigned()->nullable();
           
        });
        Schema::create('article_slugs', function (Blueprint $table) {
            createDefaultSlugsTableFields($table, 'article');
        });
        Schema::create('article_revisions', function (Blueprint $table) {
            createDefaultRevisionsTableFields($table, 'article');
        });
    }
    public function down()
    {
        Schema::dropIfExists('article_revisions');
        Schema::dropIfExists('article_translations');
        Schema::dropIfExists('article_slugs');
        Schema::dropIfExists('articles');
    }
}
