<html>
<head>
<title> Robert Low GET site</title>
</head>
<body>
<h1>My Guessing Site</h1>
<?php
$correctGuess = 10;
if (count($_GET) == 0)
{
echo "Missing guess parameter";
}
elseif ($_GET['guess']=='')
{
  echo "Your guess is too short";
}
elseif (!is_numeric($_GET['guess']))
{
  echo "Your guess is not a number";
}
elseif ($_GET['guess']<$correctGuess)
{
  echo "Your guess is too low";
}
elseif ($_GET['guess']>$correctGuess)
{
  echo "Your guess is too high";
}
else {
  echo "Congratulations - You are right";
}

?>
</body>
</html>
