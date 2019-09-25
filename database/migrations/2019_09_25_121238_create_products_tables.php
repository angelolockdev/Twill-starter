<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProductsTables extends Migration
{
    public function up()
    {
        
        Schema::create('products', function (Blueprint $table) {
            
            // this will create an id, a "published" column, and soft delete and timestamps columns
            createDefaultTableFields($table); 
        });

        // remove this if you're not going to use any translated field, ie. using the HasTranslation trait. If you do use it, create fields you want translatable in this table instead of the main table above. You do not need to create fields in both tables.
        Schema::create('product_translations', function (Blueprint $table) {
            createDefaultTranslationsTableFields($table, 'product');
            // add some translated fields
            $table->string('title', 200)->nullable();
            $table->string('subtitle', 200)->nullable();
            $table->text('description')->nullable();  
            $table->string('color', 8)->nullable();
            $table->integer('weight')->nullable();
            $table->double('price', 6, 2)->nullable(); 
            $table->unsignedInteger('ref_prod_id')->unsigned()->nullable();
        });
        
        //Enable foreign key
        Schema::enableForeignKeyConstraints();

        // remove this if you're not going to use slugs, ie. using the HasSlug trait
        Schema::create('product_slugs', function (Blueprint $table) {
            createDefaultSlugsTableFields($table, 'product');
        });

        // remove this if you're not going to use revisions, ie. using the HasRevisions trait
        Schema::create('product_revisions', function (Blueprint $table) {
            createDefaultRevisionsTableFields($table, 'product');
        });
    }

    public function down()
    {
        Schema::dropIfExists('product_revisions');
        Schema::dropIfExists('product_translations');
        Schema::dropIfExists('product_slugs');
        Schema::dropIfExists('products');
    }
}
