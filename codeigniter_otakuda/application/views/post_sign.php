<?php
if (isset($GLOBALS["HTTP_RAW_POST_DATA"]))
{
    $session_id = $_SERVER['REMOTE_ADDR'];
// Get the data
    $imageData=$GLOBALS['HTTP_RAW_POST_DATA'];

// Remove the headers (data:,) part.
// A real application should use them according to needs such as to check image type
    $filteredData=substr($imageData, strpos($imageData, ",")+1);

// Need to decode before saving since the data we received is already base64 encoded
    $unencodedData=base64_decode($filteredData);

//echo "unencodedData".$unencodedData;
    $imageName = "sign_" . rand(5,1000) . rand(1, 10) . rand(10000, 150000) . rand(1500, 100000000) . ".png";
//Set the absolute path to your folder (i.e. /usr/home/your-domain/your-folder/
    $filepath = "images/" . $imageName;

    $fp = fopen("$filepath", 'wb' );
    fwrite( $fp, $unencodedData);
    fclose( $fp );

//Connect to a mySQL database and store the user's information so you can link to it later
    $link = mysql_connect('localhost','root', '') OR DIE(mysql_error);
    mysql_select_db("test", $link);
    mysql_query("INSERT INTO customer (`session`, `image_location`) VALUES ('$session_id', '$imageName')") OR DIE(mysql_error());
    mysql_close($link);
}
?>