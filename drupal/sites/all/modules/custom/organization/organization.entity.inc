<?php

class OrganizationAPIController extends EntityAPIController
{
    public function organization_load(){
        $query = new EntityFieldQuery();
        $result = $query
            ->entityCondition('entity_type', 'organization')
            ->pager(10)
            ->execute();
        if(!empty($result['organization'])){
            $ids=array($result['organization']);
            return entity_load('organization', $ids);
        }
        return [];
    }
}