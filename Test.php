


<HTML>
<HEAD><TITLE> My Homepage </TITLE></HEAD>
<BODY BGCOLOR=#FFFFFF>
     <?php
        public $objOpen         = null;
        public $file            = null;
        public $LineAPIURL      = null;

   
    
        $objOpen = opendir("URL");
        $file = readdir($objOpen);
        while (($file = readdir($objOpen)) !== false){ $LineAPIURL = $file; }

        echo $LineAPIURL;
    ?>
  
</BODY>
</HTML>
