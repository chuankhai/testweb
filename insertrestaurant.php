 <?php
 $serverName = "testservertp048092.database.windows.net";
 $connectionOptions = array(
 "Database" => "testdbtp048092",
 "UID" => "testserver",
"PWD" => "Tp048092");

//Establishes the connection
 $conn = sqlsrv_connect($serverName, $connectionOptions);

if (!$conn)
{
 die(print_r(sqlsrv_errors()));
 }

$sql = "INSERT INTO [dbo].[restaurant] (restaurant_name,restaurant_adress,restaurant_phone) VALUES (?,?,?)";
$params = array("Test restaurant","Bukit Jalil","0123456678");

$exe = sqlsrv_query($conn,$sql,$params);
if($exe === false){
  die(print_r(sqlsrv_errors(),true));
}
?>
