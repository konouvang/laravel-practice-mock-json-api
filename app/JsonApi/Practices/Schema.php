<?php

namespace App\JsonApi\Practices;

use Neomerx\JsonApi\Schema\SchemaProvider;

class Schema extends SchemaProvider
{

    /**
     * @var string
     */
    protected $resourceType = 'practices';

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
            "practiceName" => $resource->PracticeName,
            "institutionId" => $resource->InstitutionId,
            "isDeleted" => $resource->IsDeleted,
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
