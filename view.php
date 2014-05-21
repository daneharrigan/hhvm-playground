<?hh

$file_name = "/tmp/" . uniqid() . ".php";
$source = $_POST;

file_put_contents($file_name, $source);
echo shell_exec("hhvm $file_name");
