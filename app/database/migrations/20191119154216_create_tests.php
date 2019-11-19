<?php 
    namespace App\Database\Migrations;
    
    use Leaf\Core\Database;
    
    class CreateTests extends Database {
        public function __construct() {
            parent::__construct();
        }
        
        /**
         * Run the migrations.
         *
         * @return void
         */
        public function up()  {
            if(!$this->capsule::schema()->hasTable("table")):
                $this->capsule::schema()->create("table", function ($table) {
                    $table->increments('id');
                    $table->timestamps();
                });
            endif;
        }
        
        /**
         * Reverse the migrations.
         *
         * @return void
         */
        public function down() {
            $this->capsule::schema()->dropIfExists("table");
        }
    }