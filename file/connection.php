<?php
 include "../../../inc/dbinfo.inc";

 /* Connect to MySQL and select the database. */
  $conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

  if (mysqli_connect_errno()) echo "Failed to connect to MySQL: " . mysqli_connect_error();

?>