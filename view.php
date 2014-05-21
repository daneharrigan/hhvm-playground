<?hh

$source = addcslashes($_POST["source"], '"');
$command = "echo \"$source\" | hhvm --php";
$output  = shell_exec($command);
echo $output;
