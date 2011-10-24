<?php
class ModuleUser_EntityCity extends Entity 
{    
    public function getId() {
        return $this->_aData['city_id'];
    }  
    public function getName() {
        return $this->_aData['city_name'];
    }
    
    
    
	public function setId($data) {
        $this->_aData['city_id']=$data;
    }
    public function setName($data) {
        $this->_aData['city_name']=$data;
    }    
}
?>