<?php

$branch = 'master';
if (isset($_GET['branch']))
{
  $branch = $_GET['branch'];
}

echo $branch;

# you have 1 hour to check
setcookie("branch", $branch, time() + 3600);
header('Location: index.php');
