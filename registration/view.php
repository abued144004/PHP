<?php include("includes/header.php"); 
      include("includes/nav.php");
      
?>

	
<div class="container">

	<div class="row">
		<div class="col-lg-10 ">

				

				<h1>List of Registered People</h1>
				<div class="center-div">
					<table>
						<thead class="tm">
							<tr>
								<th>Id</th>
								<th>Full Name</th>
								<th>Father's Name</th>
								<th>Student Id</th>
								<th>University Name</th>
								<th>Department</th>
								<th>Email</th>
								<th>Skill</th>
								<th>View Profile</th>
							</tr>
						</thead>
						<tbody>

							<?php 
								$sql="select *from reg";
								$result=query($sql);
								confirm($result);

								$nums=row_count($result);
								
								//$res=fetch_array($result);
								

								while($res=mysqli_fetch_array($result)){
									
								
							
							?>



							<tr>
								<td><?Php echo $res['id']; ?></td>
								<td><?Php echo $res['full_name']; ?></td>
								<td><?Php echo $res['fathers_name']; ?></td>
								<td><?Php echo $res['student_id']; ?></td>
								<td><?Php echo $res['university']; ?></td>
								<td><?Php echo $res['dept_name']; ?></td>
								<td><?Php echo $res['email']; ?></td>
								<td><?Php echo $res['skill']; ?></td>
								<td><a>View</a></td>
							</tr>
							<?php }; ?>
						</tbody>
					
					</table>

				</div>

					


								
		</div>



	</div>
    	




</div>


<?php




?>

	
<?php include("includes/footer.php"); ?>