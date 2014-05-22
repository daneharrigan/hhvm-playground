<?hh

$file_name = "/tmp/" . uniqid() . ".php";
stream_copy_to_stream(fopen("php://input", "rb"), $handle = fopen($file_name, "wb"));
fclose($handle);
echo shell_exec("hhvm --tempfile $file_name");
