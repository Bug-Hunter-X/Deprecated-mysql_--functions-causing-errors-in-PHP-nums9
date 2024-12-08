This code uses the `mysql_*` functions, which are deprecated and have been removed from recent versions of PHP.  Attempting to use them will result in errors.
```php
<?php
$conn = mysql_connect("localhost","user","password");
if (!$conn) {
die('Could not connect: ' . mysql_error());
}
mysql_select_db("database", $conn);
$sql="SELECT * FROM table";
$result = mysql_query($sql,$conn);
if (!$result) {
die('Invalid query: ' . mysql_error());
}
while($row = mysql_fetch_array($result)){
    echo $row[0];
}
mysql_close($conn);
?>
```