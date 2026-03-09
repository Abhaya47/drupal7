<?php

class OrganizationAPIController extends EntityAPIController
{
    public function loadOrganization($filter = NULL)
    {
        $result = $this->organizationLoadQuery($filter);
        if (!empty($result['organization'])) {
            $ids = array_keys($result['organization']);
            $entities = entity_load('organization', $ids);
            return $entities;
        }
        return [];
    }

    private function organizationLoadQuery($filter)
    {
        global $user;
        $query = new EntityFieldQuery();
        $query->entityCondition('entity_type', 'organization');
        if (!in_array('administrator', $user->roles))
        {
            $query->fieldCondition('field_custom_manager', 'target_id', $user->uid);
        }
        if($filter)
        {
            $query->propertyCondition('status', $filter);
        }
        $query->pager(10);
        return $query->execute();
    }

    public function loadOrganizationByID($organizationID){
        $result = entity_load('organization', [$organizationID]);
        return reset($result);
    }

    public function create(array $values = array())
    {
        $values += array(
            'name' => '',
            'status' => 1,
            'created' => REQUEST_TIME,
        );
        return parent::create($values);
    }


    public function saveOrganization($entity) {

        if (empty($entity->created)) {
            $entity->created = REQUEST_TIME;
        }

        $entity->updated = REQUEST_TIME;
        entity_save('organization', $entity);

    }

    public function deleteOrganization($id) {
        entity_delete('organization', $id);
    }


}