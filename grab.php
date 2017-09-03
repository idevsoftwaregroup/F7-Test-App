<?php
            		require 'conn.inc.php';
            		$title_qiery = mysqli_query($mysqli, "SELECT * From `h59894_mobile`.`structure` ");
            		while($row_title = mysqli_fetch_assoc($title_qiery)){
            			$title = $row_title['title'];
            		}
            		echo $title;
            		// echo "failed";
            	?>