<?php
class database
{
	private static $con=null;
	public static function myconnection()
	{
		$con=mysql_connect('localhost','root','');
		mysql_select_db('tech_ques',$con);
		return $con;
	}
		public function getdata($query)
	{
		$con=mysql_connect('localhost','root','');
			mysql_select_db('tech_ques',$con);
		$res=mysql_query($query,$con);
		return $res;
	}
	
	public function login($email,$password)
	{
	$res=mysql_query("select * from user_tbl where email_id='$email' and password='$password'",database::myconnection());
	$cnt=mysql_num_rows($res);
	return $cnt;
	}
	
	public function ques_display()
	{
		$res=mysql_query("select q.*,s.* from question_tbl as q,subject_tbl as s  ",database::myconnection());
		return $res;
	}
	public function displayq($q_id)
	{
		$res=mysql_query("select q.*,s.* from question_tbl as q,subject_tbl as s where q.fk_sub_id=s.sub_id and q_id='$q_id'",database::myconnection());
		return $res;
	}
	public function displaya($q_id)
	{
		$res=mysql_query("select * from answer_tbl where fk_q_id='$q_id'",database::myconnection());
		return $res;
	}
	public function addans($query)
	{
	$res=mysql_query($query,database::myconnection());
	return  $res;
	}
	public function displaysub()
	{
	$res=mysql_query('select q.*,s.* from question_tbl as q,subject_tbl as s where q.fk_sub_id=s.sub_id',database::myconnection());
	return  $res;
	}
	public function subdisplaybycount()
	{
	$res=mysql_query('select count(q.q_id) "cnt",s.sub_id,s.sub_name from subject_tbl as s,question_tbl as q where q.fk_sub_id=s.sub_id group by s.sub_name',database::myconnection());
	return $res;	
	}
	
	public function needapp($email)
	{
		$res=mysql_query("SELECT * FROM question_tbl where q_flag = 0 ORDER BY q_date DESC
						",database::myconnection());
		return $res;
	}
	public function approve($email)
	{
		$res=mysql_query("SELECT * FROM question_tbl where q_flag = 1 ORDER BY q_date DESC
							",database::myconnection());
		return $res;
	}
	
	public function approval($id)
	{
		$res=mysql_query("update question_tbl set q_flag=1 where q_id='$id'",
		database::myconnection());
		return $res;
	}
		public function updateapproval($id)
	{
		$res=mysql_query("update question_tbl set q_flag=0 where q_id='$id'",
		database::myconnection());
		return $res;
	}

	public function adel($id)
	{
		$res=mysql_query("delete from question_tbl where q_id='$id'",database::myconnection());
		return $res;
	}
	public function answer($id)
	{
		$res=mysql_query("select u.*,a.* FROM answer_tbl as a,user_tbl as u where a.fk_email_id=u.email_id and  fk_q_id='$id' ORDER BY(ans_date) DESC",
		database::myconnection());
		return $res;
	}
	
		public function getdata3()
	{
		$res=mysql_query("select * from user_tbl",database::myconnection());
		return $res;
	
	}	

  //delete user
	public function getdata6($id)
	{
		$res=mysql_query("delete from user_tbl where email_id='$id'",database::myconnection());
		return $res;
  
} 
	public function getdata7()
{
	$res=mysql_query("select * from user_tbl",database::myconnection());
	return $res;
}

public function muldel($all)
{
	$res=mysql_query("delete from subject_tbl where sub_id IN('$all') ",database::myconnection());
	return $res;
}

public function muldeluser($all)
{
	$res=mysql_query("delete from user_tbl where email_id IN($all) ",database::myconnection());
	return $res;
}

}
?>