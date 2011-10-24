<?php
class ModuleFavourite_EntityFavourite extends Entity 
{   
    public function getTargetId() {
        return $this->_aData['target_id'];
    }  
    public function getUserId() {
        return $this->_aData['user_id'];
    }
    public function getTargetPublish() {
        return $this->_aData['target_publish'];
    }
    public function getTargetType() {
    	return $this->_aData['target_type'];
    }
    
	public function setTargetId($data) {
        $this->_aData['target_id']=$data;
    }
    public function setUserId($data) {
        $this->_aData['user_id']=$data;
    }
    public function setTargetPublish($data) {
        $this->_aData['target_publish']=$data;
    }
    public function setTargetType($data) {
    	$this->_aData['target_type']=$data;
    }
}
?>