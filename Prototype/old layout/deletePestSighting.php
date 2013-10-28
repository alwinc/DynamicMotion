<?php

//conncect to the database
include('connect.inc.php');
session_start();
//choose database will be used
mysqli_select_db($link,"pesttracking");

//write code for update button to update pest information

if(isset($_POST['delete']))
{
	$UpdateQuery = "DELETE FROM sighting WHERE sightingId= '$_POST[sightingId]'";
	mysqli_query($link,$UpdateQuery);
};

//select any information from pest table in database
$sql = "SELECT * FROM sighting WHERE personId= ".$_SESSION['current_user'];

//create a viarable to store the result
$pestData = mysqli_query($link,$sql);
echo "<table border=1>
<tr>
<th>Sighting ID</th>
<th>Pest ID</th>
<th>Park ID</th>
<th>Number of Pest Sighted</th>
<th>Sighting Time </th>
<th>Latitude, Longitude</th>
<th>Pest Markings</th>
</tr>";

//update pest information
while($record = mysqli_fetch_array($pestData))
{
echo "<form action=deletePestSighting.php method=post>";
echo "<tr>";
echo "<td>" . "<input type=text size=7 name=sightingId value=" . $record['sightingId'] . " style=border:0px readonly></td>";
echo "<td>" . "<input type=text size=4 name=pestId value=" . $record['pestId'] . " style=border:0px></td>";
echo "<td>" . "<input type=text size=4 name=parkId value=" . $record['parkId'] . " style=border:0px></td>";
echo "<td>" . "<input type=text size=17 name=numberOfPestsSighted value=\"" . $record['numberOfPestsSighted'] . "\" style=border:0px></td>";
echo "<td>" . "<input type=text size=15 name=time value=" . $record['time'] . " style=border:0px></td>";
echo "<td>" . "<input type=text name=latlng value=\"" . $record['latlng'] . "\" style=border:0px></td>";
echo "<td>" . "<input type=text name=pestDetails value=\"" . $record['pestDetails'] . "\" style=border:0px></td>";
echo "<td>" . "<input type=submit name=delete value=delete></td>";
echo "</tr>";
echo "</form>";

}

echo "</table>";
?>
