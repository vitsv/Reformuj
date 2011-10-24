<?php
class ModuleUser_EntityUserVote extends Entity 
{    
    public function getUserId() {
        return $this->_aData['user_id'];
    }  
    public function getVoterId() {
        return $this->_aData['user_voter_id'];
    }
    public function getDelta() {
        return $this->_aData['vote_delta'];
    }

    
    
	public function setUserId($data) {
        $this->_aData['user_id']=$data;
    }
    public function setVoterId($data) {
        $this->_aData['user_voter_id']=$data;
    }
    public function setDelta($data) {
        $this->_aData['vote_delta']=$data;
    }
}
?>