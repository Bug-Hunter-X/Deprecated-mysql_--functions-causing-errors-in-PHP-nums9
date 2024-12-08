This code uses the MySQLi extension to interact with a MySQL database, replacing the deprecated `mysql_*` functions.
```php
<?php
$conn = new mysqli("localhost","user","password","database");
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM table";
$result = $conn->query($sql);
if (!$result) {
die("Invalid query: " . $conn->error);
}
while($row = $result->fetch_assoc()) {
echo $row["column_name"]; // Access column by name
}
$conn->close();
?>
```

**Note:** Replace placeholders like "localhost", "user", "password", "database", and "column_name" with your actual database credentials and column name.