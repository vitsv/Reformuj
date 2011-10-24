<?php
class ModuleBlog_EntityBlogVote extends Entity 
{    
    public function getBlogId() {
        return $this->_aData['blog_id'];
    }  
    public function getVoterId() {
        return $this->_aData['user_voter_id'];
    }
    public function getDelta() {
        return $this->_aData['vote_delta'];
    }

    
    
	public function setBlogId($data) {
        $this->_aData['blog_id']=$data;
    }
    public function setVoterId($data) {
        $this->_aData['user_voter_id']=$data;
    }
    public function setDelta($data) {
        $this->_aData['vote_delta']=$data;
    }
}
?>