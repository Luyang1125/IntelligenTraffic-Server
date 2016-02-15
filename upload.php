<?php
  
    $target_file = "uploads/"; 
	$target_file = $target_file . basename($_FILES["fileToUpload"]["name"]);
    if(file_exists($target_file)) {
   	$new_target_file = $target_file;

        if(move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $new_target_file)) {
                echo "success";
		$f1 = fopen($target_file, 'a');
		$f2 = file_get_contents($new_target_file);
		fwrite($f1, $f2);
		fclose($f1);
            } else{
                echo "fail";
        }

    }
    else	{
    	if(move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target_file)) {
        	echo "success";
	    } else{
        	echo "fail";
    	}
    }
 ?>
