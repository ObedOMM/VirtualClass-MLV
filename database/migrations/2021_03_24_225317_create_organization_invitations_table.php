<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrganizationInvitationsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('organization_invitations', function (Blueprint $table) {
			$table->id();
			$table->string('organization');
			$table->string('sender_user');
			$table->string('email_invited');
			$table->timestamp('accepted_at');
			$table->timestamp('declined_at');
			$table->timestamp('expiration_date');
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
		Schema::dropIfExists('organization_invitations');
	}
}
