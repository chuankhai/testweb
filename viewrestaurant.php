<html>
 <head>
 <title>List of KL Restaurant</title>
 </head>
 <body>
 <center>
 <h1>List of KL Restaurant</h1>
 <!--create table structure using HTML first-->
 <table border="1">
 <tr>
 <th>Restaurant ID</th>
<th>Restaurant Name</th>
<th>Address</th>
<th>Phone</th>
 </tr>
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

 $tsql= "SELECT * FROM [dbo].[restaurant]";
 $getResults= sqlsrv_query($conn, $tsql);

if ($getResults == FALSE)
{
 die(print_r(sqlsrv_errors()));
}

 while ($row = sqlsrv_fetch_array($getResults, SQLSRV_FETCH_ASSOC))
{
 echo "<tr>";
 echo "<td>". $row['restaurant_id'] . "</td>";
 echo "<td>". $row['restaurant_name'] ."</td>";
 echo "<td>". $row['restaurant_address'] . "</td>";
 echo "<td>". $row['restaurant_phone'] . "</td>";
 echo "</tr>";
 }
 sqlsrv_free_stmt($getResults);
?>
 </table>
 </center>
 </body>
</html>


