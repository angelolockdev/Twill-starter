<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateInviteesTables extends Migration
{
    public function up()
    {
        Schema::create('invitees', function (Blueprint $table) {
            
            // this will create an id, a "published" column, and soft delete and timestamps columns
            createDefaultTableFields($table); 
        });

        // remove this if you're not going to use any translated field, ie. using the HasTranslation trait. If you do use it, create fields you want translatable in this table instead of the main table above. You do not need to create fields in both tables.
        Schema::create('invitee_translations', function (Blueprint $table) {
            createDefaultTranslationsTableFields($table, 'invitee');
            // add some translated fields
            $table->string('title')->nullable();
            $table->text('bio');
        });

        // remove this if you're not going to use slugs, ie. using the HasSlug trait
        Schema::create('invitee_slugs', function (Blueprint $table) {
            createDefaultSlugsTableFields($table, 'invitee');
        });

        // remove this if you're not going to use revisions, ie. using the HasRevisions trait
        Schema::create('invitee_revisions', function (Blueprint $table) {
            createDefaultRevisionsTableFields($table, 'invitee');
        });
    }

    public function down()
    {
        Schema::dropIfExists('invitee_revisions');
        Schema::dropIfExists('invitee_translations');
        Schema::dropIfExists('invitee_slugs');
        Schema::dropIfExists('invitees');
    }
}
