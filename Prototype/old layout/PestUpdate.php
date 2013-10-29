<?php


//conncect to the database

include('connect.inc.php');


//choose database will be used

mysqli_select_db($link,"pesttracking");


//write code for update button to update pest information
if(isset($_POST['update']))
{
	$UpdateQuery = "UPDATE pest SET pestId='$_POST[id_update]', soureOfId='$_POST[source_update]', pestType='$_POST[type_update]', pestMarking='$_POST[mark_update]' WHERE pestId='$_POST[hidden]'";
	mysqli_query($link,$UpdateQuery);

};

//select any information from pest table in database
$sql = "SELECT * FROM pest";

//create a viarable to store the result
$pestData = mysqli_query($link,$sql);
echo "<table border=1>
<tr>
<th>pestId</th>
<th>sourceOfId</th>
<th>pestType</th>
<th>pestMarking</th>
</tr>";

//update pest information
while($record = mysqli_fetch_array($pestData))
{
echo "<form action=PestUpdate.php method=post>";
echo "<tr>";
echo "<td>" . "<input type=number name=id_update value=" . $record['pestId'] . " </td>";
echo "<td>" . "<input type=text name=source_update value=" . $record['soureOfId'] . " </td>";
echo "<td>" . "<input type=text name=type_update value=" . $record['pestType'] . " </td>";
echo "<td>" . "<input type=text name=mark_update value=" . $record['pestMarking'] . " </td>";
echo "<td>" . "<input type=hidden name=hidden value=" . $record['pestId'] . " </td>";
echo "<td>" . "<input type=submit name=update value=update " . " </td>";
echo "</tr>";
echo "</form>";

}

echo "</table>";
?>
