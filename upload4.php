<?php
include 'connection.php';

if(isset($_POST['submit']))
{
	$file=$_FILES['file']['tmp_name'];
	$handle=fopen($file,"r");
	$c=0;

	$query = "SELECT * FROM `firstsem_results`";

	$result = mysql_query($query);	
	$flag=1;
	$count=0;
	while($arry = mysql_fetch_array($result)) 
	{
		$sample[$count]=$arry['USN'];
		$count++;
	}




	while (($data = fgetcsv($handle, 1000, ",")) !== FALSE)
	{
		if($c<1)
		{
			$c++;
			continue;
		}
		$NAME =$data[1];
		$USN = $data[2];
		$CI1 = $data[3];
		$SI1 = $data[4];
		$CI2 = $data[5];
		$SI2 = $data[6];
		$CI3 = $data[7];
		$SI3 = $data[8];
		$CI4 = $data[9];
		$SI4 = $data[10];
		$CI5 = $data[11];
		$SI5 = $data[12];
		$CI6 = $data[13];
		$SI6 = $data[14];
		$CI7 = $data[15];
		$SI7 = $data[16];
		$CI8 = $data[17];
		$SI8 = $data[18];
		$flg=0;
		for($i=0;$i<=$count;$i++)
		{
			if($sample[$i]==$data[2])
			{
				$flg=1;
			}
		}

		if($flg==0)
		{
			mysql_query("INSERT INTO `firstsem_results` (`ID`,`NAME`,`USN`,`CI1`,`SI1`, `CI2`, `SI2`,`CI3`, `SI3`,`CI4`,`SI4`,`CI5`,`SI5`,`CI6`,`SI6`,`CI7`,`SI7`,`CI8`,`SI8`) 
			VALUES (NULL, '$NAME', '$USN', '$CI1', '$SI1', '$CI2', '$SI2','$CI3', '$SI3','$CI4', '$SI4','$CI5', '$SI5','$CI6', '$SI6','$CI7', '$SI7','$CI8', '$SI8')") or die(mysql_error());

		}
		//echo "<script>alert('Users have been Registered')</script>";
		header('Location: first-sem-coe.php');
 		

	}

	fclose($handle);

}
?>
