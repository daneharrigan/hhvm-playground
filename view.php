<?hh

$source = addcslashes($_POST["source"], '"');
echo $source
$command = "echo \"$source\" | hhvm --php";
$output  = shell_exec($command);
echo $output;
