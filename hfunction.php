	<?php
	    include("config.php");
	    
	 //    $arrayName = array(); 
	 //    while ($res=mysqli_fetch_array($result2)) {
			
		// $arrayName=$res['name'];
		
		//}


		if(isset($_POST['submit']))
		{

			$pname=$_POST['pname'];
			$ddate=$_POST['ddate'];
		
			//$d=date_default_timezone_get();

			$rr=mysqli_query($mysql2,"SELECT pname from precord where pname ='$pname' ");

			if(mysqli_num_rows($rr) == 0)
			{  

				 echo "<script>
				alert('Register');
				window.location.href='insert.php';
				</script>";
			
			
   			 
			}
			
			else

		{	
			 echo "<script>
				alert('He visited the hospital in ');
				
				</script>";
			header("location:view.php?vals=".$pname."");
			
		}
		}
		?>