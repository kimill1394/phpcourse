
 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>

     </title>
   </head>
   <body>
     <?php
     namespace myspace;
     require_once "myspace/name/01namespace.php";
     use name\sampleCls;
     $obj = new sampleCls();
     // $obj = new sampleCls(); # ERR!
     $obj->show();

      ?>
   </body>
 </html>
