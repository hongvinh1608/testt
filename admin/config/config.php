<?php
$mysqli = new mysqli("us-cluster-east-01.k8s.cleardb.net","b5e66403615545","b2613ba6","heroku_e9f0d172ad4ec91");

// Check connection
if ($mysqli -> connect_errno) {
  echo "ket noi mysqli loi: " . $mysqli -> connect_error;
  exit();
}
?>
