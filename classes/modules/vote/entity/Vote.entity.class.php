<?php
class ModuleVote_EntityVote extends Entity 
{    
    public function getTargetId() {
        return $this->_aData['target_id'];
    }
    public function getTargetType() {
        return $this->_aData['target_type'];
    }  
    public function getVoterId() {
        return $this->_aData['user_voter_id'];
    }
    public function getDirection() {
        return $this->_aData['vote_direction'];
    }
    public function getValue() {
        return $this->_aData['vote_value'];
    }
    public function getDate() {
        return $this->_aData['vote_date'];
    }

    
    
	public function setTargetId($data) {
        $this->_aData['target_id']=$data;
    }
    public function setTargetType($data) {
        $this->_aData['target_type']=$data;
    }
    public function setVoterId($data) {
        $this->_aData['user_voter_id']=$data;
    }
    public function setDirection($data) {
        $this->_aData['vote_direction']=$data;
    }
    public function setValue($data) {
        $this->_aData['vote_value']=$data;
    }
    public function setDate($data) {
        $this->_aData['vote_date']=$data;
    }
}
?>