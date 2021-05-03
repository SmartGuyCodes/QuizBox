<?php
Class Duplicate_question_model extends CI_Model
{
 
  
 function check_duplicate($limit){
	 
	$question=strip_tags($this->input->post('question'));
			 $this->db->like('quizbox_qbank.question',$question);

	 
		 $this->db->join('quizbox_category','quizbox_category.cid=quizbox_qbank.cid');
	 $this->db->join('quizbox_level','quizbox_level.lid=quizbox_qbank.lid');
	 $this->db->limit(5,$limit);
		$this->db->order_by('quizbox_qbank.qid','desc');
		$query=$this->db->get('quizbox_qbank');
		return $query->result_array();
 }
 
  

 
}







 



?>
