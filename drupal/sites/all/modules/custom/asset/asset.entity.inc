<?php

class AssetAPIController extends EntityAPIController
{
    public function loadAsset($filter = NULL)
    {
        $result = $this->assetLoadQuery($filter);
        if (!empty($result['asset'])) {
            $ids = array_keys($result['asset']);
            $entities = entity_load('asset', $ids);
            return $entities;
        }
        return [];
    }

    private function assetLoadQuery($filter)
    {
        global $user;
        $query = new EntityFieldQuery();
        $query->entityCondition('entity_type', 'asset');
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

    public function loadAssetByID($assetID){
        $result = entity_load('asset', [$assetID]);
        return reset($result);
    }


    public function saveAsset($entity) {

        if (empty($entity->created)) {
            $entity->created = REQUEST_TIME;
            $entity->changed = REQUEST_TIME;
        }

        $entity->updated = REQUEST_TIME;
        entity_save('asset', $entity);
    }

    public function create(array $values = array())
    {
        $values += array(
            'name' => '',
            'created' => REQUEST_TIME,
        );
        return parent::create($values);
    }

    public function deleteAsset($id) {
        entity_delete('asset', $id);
    }


}