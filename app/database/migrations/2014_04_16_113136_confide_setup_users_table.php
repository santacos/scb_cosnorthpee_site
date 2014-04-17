<?php
use Illuminate\Database\Migrations\Migration;

class ConfideSetupUsersTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Creates the users table
        Schema::create('users', function($table)
        {
            $table->increments('user_id');
            $table->string('username');
            $table->string('email');
            $table->string('password');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('mobilephonenumber');
            $table->string('confirmation_code');
            $table->boolean('confirmed')->default(false);
            $table->integer('idcard');
            $table->integer('status');
            $table->timestamps();
        });
        Schema::create('candidates', function($table)
        {
             $table->foreign('candidate_id')->references('user_id')->on('users')->onDelete('cascade')->onUpdate('cascade');
             $table->string('experience');
             $table->float('profile_completeness');
             $table->primary('user_id');
            $table->timestamps();
        });
         Schema::create('candidate_requisitions', function($table)
        {
             $table->increments('application_id');
             $table->foreign('requisition_id')->references('requisition_id')->on('requisitions')->onDelete('cascade')->onUpdate('cascade');
             $table->foreign('candidate_id')->references('candidate_id')->on('candidates')->onDelete('cascade')->onUpdate('cascade');
             $table->foreign('application_status_id')->references('application_status_id')->on('application_statuses')->onDelete('cascade')->onUpdate('cascade');
             $table->timestamp('created_at');
             $table->timestamp('updated_at');
            $table->timestamps();
        });
          Schema::create('interview_log', function($table)
        {
             $table->integer('visit_number');
             $table->foreign('application_id')->references('application_id')->on('candidate_requisitions')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamp('interview_datetime');
            $table->primary(array('visit_number', 'application_id'));
            $table->timestamps();
        });
            Schema::create('interview_log', function($table)
        {
             $table->integer('visit_number');
             $table->foreign('application_id')->references('application_id')->on('candidate_requisitions')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamp('interview_datetime');
            $table->primary(array('visit_number', 'application_id'));
            $table->timestamps();
        });

        // Creates password reminders table
        Schema::create('password_reminders', function($t)
        {
            $t->string('email');
            $t->string('token');
            $t->timestamp('created_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('password_reminders');
        Schema::drop('users');
    }

}
