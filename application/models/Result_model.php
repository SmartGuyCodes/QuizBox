<?php
Class Result_model extends CI_Model
{
	
 
 function result_list($limit,$status='0'){
	$result_open=$this->lang->line('open');
	$logged_in=$this->session->userdata('logged_in');
	$uid=$logged_in['uid'];
	  
		
	if($this->input->post('search')){
		 $search=$this->input->post('search');
		 $this->db->or_where('quizbox_users.email',$search);
		 $this->db->or_where('quizbox_users.first_name',$search);
		 $this->db->or_where('quizbox_users.last_name',$search);
		 $this->db->or_where('quizbox_users.contact_no',$search);
		 $this->db->or_where('quizbox_result.rid',$search);
		 $this->db->or_where('quizbox_quiz.quiz_name',$search);
 
	 }else{
		 $this->db->where('quizbox_result.result_status !=',$result_open);
	 }
	 	 
		if(!in_array('List_all',explode(',',$logged_in['results']))){
		$this->db->where('quizbox_result.uid',$uid);
		}else{
		$logged_in=$this->session->userdata('logged_in');
	
		 if($logged_in['uid'] != '1'){
	 $uid=$logged_in['uid'];
	 $this->db->where('quizbox_quiz.inserted_by',$uid);
	 } 
		}
	 	if($status !='0'){
			$this->db->where('quizbox_result.result_status',$status);
		}
		
		
		
		$this->db->limit($this->config->item('number_of_rows'),$limit);
		$this->db->order_by('rid','desc');
		$this->db->join('quizbox_users','quizbox_users.uid=quizbox_result.uid');
		$this->db->join('quizbox_quiz','quizbox_quiz.quid=quizbox_result.quid');
		$query=$this->db->get('quizbox_result');
		return $query->result_array();
		
	 
 }
 
 function quiz_list(){
	 $this->db->order_by('quid','desc');
$query=$this->db->get('quizbox_quiz');	
return $query->result_array();	 
 }
 
 
 function no_attempt($quid,$uid){
	 
	$query=$this->db->query(" select * from quizbox_result where uid='$uid' and quid='$quid' ");
		return $query->num_rows(); 
 }
 
 
 function remove_result($rid){
	 
	 $this->db->where('quizbox_result.rid',$rid);
	 if($this->db->delete('quizbox_result')){
		  $this->db->where('rid',$rid);
		  $this->db->delete('quizbox_answers');
		 return true;
	 }else{
		 
		 return false; 
	 }
	 
	 
	 
 }
 
 
 function generate_report($quid,$gid){
	$logged_in=$this->session->userdata('logged_in');
	$uid=$logged_in['uid'];
	$date1=$this->input->post('date1');
	 $date2=$this->input->post('date2');
		
		if($quid != '0'){
			$this->db->where('quizbox_result.quid',$quid);
		}
		if($gid != '0'){
			$this->db->where('quizbox_users.gid',$gid);
		}
		if($date1 != ''){
			$this->db->where('quizbox_result.start_time >=',strtotime($date1));
		}
		if($date2 != ''){
			$this->db->where('quizbox_result.start_time <=',strtotime($date2));
		}

	 	$this->db->order_by('rid','desc');
		$this->db->join('quizbox_users','quizbox_users.uid=quizbox_result.uid');
		$this->db->join('quizbox_group','quizbox_group.gid=quizbox_users.gid');
		$this->db->join('quizbox_quiz','quizbox_quiz.quid=quizbox_result.quid');
		$query=$this->db->get('quizbox_result');
		return $query->result_array();
 }
 
 
 
 
 
 function get_result($rid){
	$logged_in=$this->session->userdata('logged_in');
	$uid=$logged_in['uid'];
		if($logged_in['su']=='0'){
			$this->db->where('quizbox_result.uid',$uid);
		}
		$this->db->where('quizbox_result.rid',$rid);
	 	$this->db->join('quizbox_users','quizbox_users.uid=quizbox_result.uid');
		$this->db->join('quizbox_group','quizbox_group.gid=quizbox_users.gid');
		$this->db->join('quizbox_quiz','quizbox_quiz.quid=quizbox_result.quid');
		$query=$this->db->get('quizbox_result');
		return $query->row_array();
	 
	 
 }
 
 
 function last_ten_result($quid){
		$this->db->order_by('percentage_obtained','desc');
		$this->db->limit(10);		
	 	$this->db->where('quizbox_result.quid',$quid);
	 	$this->db->join('quizbox_users','quizbox_users.uid=quizbox_result.uid'); 
		$this->db->join('quizbox_quiz','quizbox_quiz.quid=quizbox_result.quid');
		$query=$this->db->get('quizbox_result');
		return $query->result_array();
 }
 
 
 
    function get_percentile($quid,$uid,$score){
  $logged_in =$this->session->userdata('logged_in');
$gid= $logged_in['gid'];
$res=array();
	$this->db->select("quizbox_result.uid");
	$this->db->where("quizbox_result.quid",$quid);
	 $this->db->group_by("quizbox_result.uid");
	// $this->db->order_by("quizbox_result.score_obtained",'DESC');
	$query = $this -> db -> get('quizbox_result');
	$res[0]=$query -> num_rows();

	$this->db->select("quizbox_result.uid");
	
	$this->db->where("quizbox_result.quid",$quid);
	$this->db->where("quizbox_result.uid !=",$uid);
	$this->db->where("quizbox_result.score_obtained <=",$score);
	$this->db->group_by("quizbox_result.uid");
	// $this->db->order_by("quizbox_result.score_obtained",'DESC');
	$querys = $this -> db -> get('quizbox_result');
	$res[1]=$querys -> num_rows();
		
   return $res;
  
  
 }
 
 
 
 
 
 
 
 
 
 
 
 
 

}












?>
