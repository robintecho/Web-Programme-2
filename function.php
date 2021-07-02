	<?php
	    include("config.php");
	    
	 //    $arrayName = array(); 
	 //    while ($res=mysqli_fetch_array($result2)) {
			
		// $arrayName=$res['name'];
		
		//}


		if(isset($_POST['submit']))
		{
			$pid=$_POST['pid'];
			$pname=$_POST['pname'];
			$page=$_POST['page'];
			$paddress=$_POST['paddress'];
			$addate=$_POST['addate'];
			$dname=$_POST['dname'];
			$pmed=$_POST['pmed'];
			
			

			$rr=mysqli_query($mysql2,"SELECT pname from precord where pname ='$pname' ");

			if(mysqli_num_rows($rr) == 0)
			{  

				$result=mysqli_query($mysql2,"INSERT into precord values('','$pid','$pname','$page','$paddress','$addate','$dname','$pmed')");
			
			if($result)
			{   
				 echo "<script>
				alert('Submitted');
				window.location.href='insert.php';
				</script>";
				// header("location:insert.php");
				
			}
			else
			{
				echo "Failed";
			}
   			 
			}
			
			else

		{	
			echo "<script>
				alert('name already Exit');
				window.location.href='insert.php';
				</script>";
			
		}
		}
		?>