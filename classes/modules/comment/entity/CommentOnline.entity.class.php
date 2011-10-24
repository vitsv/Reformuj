<?php
class ModuleComment_EntityCommentOnline extends Entity 
{          
    public function getTargetId() {
        return $this->_aData['target_id'];
    }
    public function getTargetType() {
        return $this->_aData['target_type'];
    }
	public function getCommentId() {
        return $this->_aData['comment_id'];
    }
    public function getTargetParentId() {
        return (array_key_exists('target_parent_id',$this->_aData)) ? $this->_aData['target_parent_id'] : 0;
    }    
    	
    public function setTargetId($data) {
        $this->_aData['target_id']=$data;
    }
    public function setTargetType($data) {
        $this->_aData['target_type']=$data;
    }
    public function setCommentId($data) {
        $this->_aData['comment_id']=$data;
    }
    public function setTargetParentId($data) {
    	$this->_aData['target_parent_id']=$data;
    }    
}
?>