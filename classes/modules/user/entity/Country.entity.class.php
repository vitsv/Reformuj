<?php
class ModuleUser_EntityCountry extends Entity 
{    
    public function getId() {
        return $this->_aData['country_id'];
    }  
    public function getName() {
        return $this->_aData['country_name'];
    }
    
    
    
	public function setId($data) {
        $this->_aData['country_id']=$data;
    }
    public function setName($data) {
        $this->_aData['country_name']=$data;
    }    
}
?>