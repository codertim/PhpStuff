Tim Force <twforce@yahoo.com>
To:Tim Force
Tue, Nov 29 at 5:10 PM
<!DOCTYPE html>
<html>
    <head>
        <title>File Upload</title>
    </head>
    <body>
<?php
    define("DEBUG", "1");

    echo "<br />os: " . PHP_OS;
    $file_dir = "/UploadedFiles/";
    if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
        $file_dir = "C:\\Temp";
        echo '<br />note: server using Windows';
    } else {
        echo '<br />note: server not using Windows';
    }

    foreach($_FILES as $fname => $file_arr) {
        echo "<br />----------------------------<br />";
        echo "path: " . $file_arr['tmp_name'] . "<br />\n";
        echo "name: " . $file_arr['name'] . "<br />\n";
        echo "type: " . $file_arr['type'] . "<br />\n";
        echo "size: " . $file_arr['size'] . "<br />\n";

        if (is_uploaded_file($file_arr['tmp_name'])) {
            move_uploaded_file($file_arr['tmp_name'],
              "$file_dir/" . "uploaded_" . $file_arr['name'])
              or die ("Upload failed");
            echo "File uploaded";
        } else {
            echo "file not found";
        }
    }

    if (DEBUG == "1") {
        echo "<br /><br /><br /><br />";
        print_r($_FILES);
        echo "<br /><br />";
        phpinfo();
    }
    
?>
    </body>
</html>

