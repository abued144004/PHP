<?php

function redirect($location){
	return header('Location:{$location}');	
}




/*-------validation registration form-------*/
//if(isset($_POST['register-submit'])){}
function validate_user_registration(){

	if($_SERVER['REQUEST_METHOD']=='POST'){

		$first_name=$_POST['fullname'];
		$fathersname=$_POST['fathersname'];
		$studentid=$_POST['studentid'];
		$university=$_POST['university'];
		$department=$_POST['department'];
		$email=$_POST['email'];
		$skill=$_POST['skill'];



				
					
		
	if(email_exists($email)){	
		echo "<b>Please Enter Another Email this was taken.</b>";	
		}
		//echo "it works";

		insert_Reg($first_name,$fathersname,$studentid,$university,$department,$email,$skill);

	}



}

function email_exists($email){
	$sql="select id from reg where email='$email'";
	$result=query($sql);

	if(row_count($result)==1)return true;
	else false;
}

function insert_Reg($first_name,$fathersname,$studentid,$university,$department,$email,$skill){

	$sql="insert into reg(full_name,fathers_name,student_id,university,dept_name,email,skill)";
	$sql.=" values('$first_name','$fathersname','$studentid','$university','$department','$email','$skill')";

	$result=query($sql);
	confirm($result);


}

function tabular_data(){

	$sql="select *from reg";
	$result=query($sql);
	confirm($result);

	$nums=row_count($result);
	
	$res=fetch_array($result);
	

	while($res=fetch_array($result)){
		echo $res[1];
	}

}

?>