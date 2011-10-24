<?php
class ModuleTopic_EntityTopicQuestionVote extends Entity 
{    
    public function getTopicId() {
        return $this->_aData['topic_id'];
    }  
    public function getVoterId() {
        return $this->_aData['user_voter_id'];
    }
	public function getAnswer() {
        return $this->_aData['answer'];
    }
    
    
	public function setTopicId($data) {
        $this->_aData['topic_id']=$data;
    }
    public function setVoterId($data) {
        $this->_aData['user_voter_id']=$data;
    }
    public function setAnswer($data) {
        $this->_aData['answer']=$data;
    }
}
?>