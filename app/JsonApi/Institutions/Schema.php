<?php

namespace App\JsonApi\Institutions;

use Neomerx\JsonApi\Schema\SchemaProvider;

class Schema extends SchemaProvider
{

    /**
     * @var string
     */
    protected $resourceType = 'institutions';

    /**
     * @param $resource
     *      the domain record being serialized.
     * @return string
     */
    public function getId($resource)
    {
        return (string) $resource->getRouteKey();
    }

    /**
     * @param $resource
     *      the domain record being serialized.
     * @return array
     */
    public function getAttributes($resource)
    {
        return [
            "name" => $resource->Name,
            "patientEducation" => $resource->PatientEducation,
            "portalSubDomainPrefix" => $resource->PortalSubDomainPrefix,
            "autoReminderInterval" => $resource->AutoReminderInterval,
            "callCenterNumber" => $resource->CallCenterNumber,
            "useThePrefix" => $resource->UseThePrefix,
            "showQuestionnaireTime" => $resource->ShowQuestionnaireTime,
            "patientTimeout" => $resource->PatientTimeout,
            "userTimeout" => $resource->UserTimeout,
            "schemaName" => $resource->SchemaName,
            "abbreviation" => $resource->Abbreviation,
            "autoSendExternalConnection" => $resource->AutoSendExternalConnection,
            "isPublic" => $resource->IsPublic,
            "techSupportURL" => $resource->TechSupportURL,
            "techSupportNumber" => $resource->TechSupportNumber,
            "theme" => $resource->Theme,
            "outgoingEmailDomain" => $resource->OutgoingEmailDomain,
            "globalShare" => $resource->GlobalShare,
            "oberdConnectEnabled" => $resource->OberdConnectEnabled,
            "billPayEnabled" => $resource->BillPayEnabled,
            "helpDeskURL" => $resource->HelpDeskURL,
            "deactivated" => $resource->Deactivated,
            "deactivatedOn" => $resource->DeactivatedOn,
        ];
    }

    public function getRelationships($resource, $isPrimary, array $includedRelationships)
    {
        return [
            'clinics' => [
                self::SHOW_SELF => true,
                self::SHOW_RELATED => true,
                self::SHOW_DATA => isset($includedRelationships['clinics']),
                self::DATA => function () use ($resource) {
                    return $resource->clinics;
                },
            ],
            'practices' => [
                self::SHOW_SELF => true,
                self::SHOW_RELATED => true,
                self::SHOW_DATA => isset($includedRelationships['practices']),
                self::DATA => function () use ($resource) {
                    return $resource->practices;
                },
            ],
        ];
    }
}
