<?php

use Illuminate\Database\Seeder;
use App\Institution;

class InstitutionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $institutionSeed = Institution::create(
            [
                'Name'=>'Konou Inst',
                'MediaId'=>'1',
                'EmailMediaId'=>'1',
                'StartMediaId'=>'1',
                'MobileMediaId'=>'1',
                'LoginMediaId'=>'1',
                'ReportMediaId'=>'1',
                'LoginCssMediaId'=>'1',
                'PortalLogoMediaId'=>'1',
                'PortalHeaderMediaId'=>'1',
                'DefaultClinicId'=>'1',
                'EmailLayoutId'=>'1',
                'PatientEducation'=>'1',
                'PortalSubDomainPrefix'=>'0',
                'AutoReminderInterval'=>'0',
                'CallCenterNumber'=>'3',
                'UseThePrefix'=>'1',
                'ShowQuestionnaireTime'=>'1',
                'PatientTimeout'=>'1',
                'UserTimeout'=>'300',
                'SchemaName'=>'100000',
                'Abbreviation'=>'demo_InstitutionKON',
                'AutoSendExternalConnection'=>'0',
                'IsPublic'=>'1',
                'TechSupportURL'=>'1',
                'TechSupportNumber'=>'1',
                'Theme'=>'default',
                'OutgoingEmailDomain'=>'1',
                'GlobalShare'=>'0',
                'OberdConnectEnabled'=>'1',
                'BillPayEnabled'=>'0',
                'HelpDeskURL'=>'1',
                'Deactivated'=>'0',
                'DeactivatedOn'=>'1',
            ]
        );

        $institutionSeed->clinics()->createMany([
            [
                'Name'=>'Konou Inst Clinic',
                'CreatedOn'=>'43955',
                'InstitutionId'=>'1',
                'ContactId'=>'',
                'HL7Type'=>'',
                'IsDeleted'=>'0',
            ],
            [
                'Name'=>'April Clinic',
                'CreatedOn'=>'43955',
                'InstitutionId'=>'1',
                'ContactId'=>'',
                'HL7Type'=>'',
                'IsDeleted'=>'0',
            ]
        ]);

        $institutionSeed->practices()->createMany([
            [
                'PracticeName'=>'KonouFirstPractice',
                'InstitutionId'=>'1',
                'IsDeleted'=>'0',
            ],
            [
                'PracticeName'=>'PracticeAllLaCarte',
                'InstitutionId'=>'1',
                'IsDeleted'=>'0',
            ],
        ]);
    }
}
