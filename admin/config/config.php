<?php
$mysqli = new mysqli("us-cluster-east-01.k8s.cleardb.net","bdb349a88d3d26","6dd0c0f7","heroku_1bbd367bec98762");

// Check connection
if ($mysqli -> connect_errno) {
  echo "ket noi mysqli loi: " . $mysqli -> connect_error;
  exit();
}
?>
