<html>
<head>
    <title>[ myVideos ]</title>
    <link href="styles.css" rel="stylesheet" type="text/css" />
</head>
<body>
     <section>
    		<?php
            $dir = 'vidz/';
            $scan = scandir($dir,1);
				      
            for ($i=0; $i<count($scan); $i++) {
             if ($scan[$i] != '.' && $scan[$i] != '..') {
             echo '
             
		<div class="vidz"><h2 class="vH2">'.$scan[$i].'</h2>							
			<video controls="controls" preload="metadata" height="300" width="400">
				<source src="'.$dir . $scan[$i].'" type="video/webm" />
				No HTML5 video support sorry !
	 		</video>             
             	</div>';
         
             } 
            }
        ?>
     </section>
</body>
</html>
