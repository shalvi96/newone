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
	public function login($email,$password)
	{
	$res=mysql_query("select * from user_tbl where email_id='$email' and password='$password'",database::myconnection());
	$cnt=mysql_num_rows($res);
	return $cnt;
	}
	
	public function ques_display()
	{
		$res=mysql_query("select q.*,s.*,u.* from question_tbl as q,subject_tbl as s,user_tbl as u where q.fk_sub_id=s.sub_id and q.fk_email_id=u.email_id and q_flag=1 ORDER BY q.q_date ASC",database::myconnection());
		return $res;
	}
	public function displayq($q_id)
	{
		$res=mysql_query("select q.*,s.*,u.*  from question_tbl as q,subject_tbl as s,user_tbl as u where q.fk_sub_id=s.sub_id and q_id='$q_id' and q.fk_email_id=u.email_id",database::myconnection());
		return $res;
	}
	public function displaya($q_id)
	{
		$res=mysql_query("select u.*,a.* from answer_tbl as a,user_tbl as u where a.fk_email_id=u.email_id and fk_q_id='$q_id'",database::myconnection());
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

		//subject display
	
	public function getdata()
{
	$res=mysql_query("select * from subject_tbl",database::myconnection());
	return $res;
	
}
public function getdata4($id)
{
	$res=mysql_query("select * from subject_tbl where sub_id='$id'",database::myconnection());
	return $res;
	
}




	//subject insert

	public function getdata1($name)
{
	$res=mysql_query("insert into subject_tbl values(null,'$name')",database::myconnection());
	return $res;
	
}

	//subject delete

	public function getdata2($id)
	{
		$res=mysql_query("delete from subject_tbl where sub_id='$id'",database::myconnection());
		return $res;
	
	}
	
	
	// subject update
	
	public function getdata3($id,$name)
{
	$res=mysql_query("update subject_tbl set sub_name='$name' where sub_id='$id'",
	database::myconnection());
	return $res;
	
}

	public function mypost($email)
	{
		$res=mysql_query("select * from question_tbl where fk_email_id='$email'",database::myconnection());
		return $res;
	}

	public function sub_displaybycount()
	{
	$res=mysql_query('select count(s.sub_id) "cnt",s.sub_id,s.sub_name from subject_tbl as s,question_tbl as q where q.fk_sub_id=s.sub_id group by s.sub_name',$this->myconnection());
	return $res;	
	}
	public function displayquestbysub($id)
	{
	$res=mysql_query("select q.*,s.*,u.* from question_tbl as q,subject_tbl as s,user_tbl as u where q.fk_email_id=u.email_id and q.fk_sub_id=s.sub_id and fk_sub_id='$id' and q_flag=1 ORDER BY(q.q_date) ASC",$this->myconnection());
	return  $res;	
	}

	//user display
		//public function getdata3d()
	//{
	//	$res=mysql_query("select * from user_tbl",database::myconnection());
	//	return $res;
	
	//}	

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

public function editpost($q_id)
{
	$res=mysql_query("select q.*,s.* from question_tbl as q,subject_tbl s where q.fk_sub_id=s.sub_id and q.q_id='$q_id'",
	database::myconnection());
	return $res;
	
}	
public function postdel($q_id)
{
	$res=mysql_query("delete from question_tbl where q_id='$q_id'",database::myconnection());
	return $res;
	
}
}
?>