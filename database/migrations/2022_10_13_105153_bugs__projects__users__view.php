<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class BugsProjectsUsersView extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("
        CREATE VIEW bugs_data as select bugs.id ,bugs.name as bug_name,bugs.img,type,priority ,created_at,updated_at,`status`,
        projects.name as project_name,developer.name as developer_Name ,tester.name as Tester_Name 
        from bugs 
        JOIN projects on bugs.project_id=projects.id 
        JOIN users as developer on developer.id=bugs.developer_id
        JOIN users as tester on tester.id=bugs.tester_id
        ");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
