<?php namespace Arteriaweb\Formplugin\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateArteriawebFormplugin extends Migration
{
    public function up()
    {
        Schema::create('arteriaweb_formplugin_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->text('name')->nullable();
            $table->text('content')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('arteriaweb_formplugin_');
    }
}
