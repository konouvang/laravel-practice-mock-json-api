<?php

namespace App\JsonApi\Clinics;

use Neomerx\JsonApi\Schema\SchemaProvider;

class Schema extends SchemaProvider
{

    /**
     * @var string
     */
    protected $resourceType = 'clinics';

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
            "createdOn" => $resource->CreatedOn,
            "hl7Type" => $resource->HL7Type,
            "isDeleted" => $resource->isDeleted,
        ];
    }

    public function getRelationships($resource, $isPrimary, array $includedRelationships)
    {
        return [
            'institution' => [
                self::SHOW_SELF => true,
                self::SHOW_RELATED => true,
            ]
        ];
    }
}
