<?php
$database = "?????";


$con = mysql_connect("localhost","root","root");

$sql1 = "SHOW TABLES FROM $database";
$result1 = mysql_query($sql1);
mysql_select_db($database);
echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n\n";
echo "<".$database.">\n";

while ($row1 = mysql_fetch_row($result1)) {
   
      	$sql2 = "SELECT * FROM ".$row1[0];
		$result2 = mysql_query($sql2);
		
		while ($row2 = mysql_fetch_array($result2)) {
			echo "\t<".$row1[0].">\n";
			
 			$sql3 = "SHOW COLUMNS FROM ".$row1[0]." FROM $database";
			$result3 = mysql_query($sql3);

			while ($row3 = mysql_fetch_row($result3)) {
				$a = $row3[0];
    			echo "\t\t<".$row3[0].">".$row2[$a]."</".$row3[0].">\n";
			}
			
		echo "\t\t</".$row1[0].">\n";
		}

   
   
    

    
}
echo "\t</marcos>\n";
?>