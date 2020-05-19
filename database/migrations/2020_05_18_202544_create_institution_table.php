<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInstitutionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('institution', function (Blueprint $table) {
            $table->bigIncrements('InstitutionId');
            $table->string('Name');
            $table->tinyInteger('MediaId');
            $table->tinyInteger('EmailMediaId');
            $table->tinyInteger('StartMediaId');
            $table->tinyInteger('MobileMediaId');
            $table->tinyInteger('LoginMediaId');
            $table->tinyInteger('ReportMediaId');
            $table->tinyInteger('LoginCssMediaId');
            $table->tinyInteger('PortalLogoMediaId');
            $table->tinyInteger('PortalHeaderMediaId');
            $table->tinyInteger('DefaultClinicId');
            $table->tinyInteger('EmailLayoutId');
            $table->tinyInteger('PatientEducation');
            $table->string('PortalSubDomainPrefix');
            $table->tinyInteger('AutoReminderInterval');
            $table->string('CallCenterNumber');
            $table->tinyInteger('UseThePrefix');
            $table->tinyInteger('ShowQuestionnaireTime');
            $table->tinyInteger('PatientTimeout');
            $table->tinyInteger('UserTimeout');
            $table->string('SchemaName');
            $table->string('Abbreviation');
            $table->tinyInteger('AutoSendExternalConnection');
            $table->tinyInteger('IsPublic');
            $table->string('TechSupportURL');
            $table->string('TechSupportNumber');
            $table->string('Theme');
            $table->string('OutgoingEmailDomain');
            $table->tinyInteger('GlobalShare');
            $table->tinyInteger('OberdConnectEnabled');
            $table->tinyInteger('BillPayEnabled');
            $table->string('HelpDeskURL');
            $table->tinyInteger('Deactivated');
            $table->timestamp('DeactivatedOn');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('institution');
    }
}
