$file_location = "path/to/file.zip";

header($_SERVER["SERVER_PROTOCOL"] . " 200 OK");
header("Cache-Control: public"); // needed for internet explorer
header("Content-Type: application/zip");
header("Content-Transfer-Encoding: Binary");
header("Content-Length:".filesize($file_location));
header("Content-Disposition: attachment; filename=file.zip");
readfile($file_location);
