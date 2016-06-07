<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Collect Sigfox Data</title>
</head>

<body>
<?php

//check data integrity
	if (isset($_POST["time"], $_POST["device"], $_POST["duplicate"], $_POST["snr"], $_POST["rssi"], $_POST["data"], $_POST["station"])){
		$time=$_POST["time"];
		$device=$_POST["device"];
		$duplicate=$_POST["duplicate"];
		$snr=$_POST["snr"];
		$rssi=$_POST["rssi"];
		$data=$_POST["data"];
		$station=$_POST["station"];
		//save data to file
		if ($file=fopen($device.".rawjson",'a')){
			fwrite($file,"{\"time\": \"" . $time . "\", "
			."\"device\": \"" . $device . "\", "
			."\"duplicate\": \"" . $duplicate . "\", "
			."\"snr\": \"" . $snr . "\", "
			."\"rssi\": \"" . $rssi . "\", "
			."\"data\": \"" . $data . "\", "
			."\"station\": \"" . $station . "\"}\n");
			
			fclose($file);
		}
	}
	



?>


</body>
</html>