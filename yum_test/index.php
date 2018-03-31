<?php
?>
<html lang = "en">

   <head>
      <titleTest EvolveCyber</title>
      <link href = "css/bootstrap.min.css" rel = "stylesheet">

      <style>
         body {
            padding-top: 40px;
            padding-bottom: 40px;
            background-color: #ADABAB;
         }

         .form-signin .yum {
            width: 630px;
            padding: 15px;
            margin: 0 auto;
            color: #017572;
         }


          input {
              width: 300px;
          }

         .form-signin .yum .form-control {
            position: relative;
            height: auto;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            padding: 10px;
            font-size: 16px;
         }

         .form-signin .form-control:focus {
            z-index: 2;
         }


         h2{
            text-align: center;
            color: #017572;
         }
      </style>

   </head>

   <body>

      <h2>Enter Username and Password</h2>
      <div class = "container form-signin">


      </div> <!-- /container -->

      <div>


       <form role = "form"
            action = "<?php
                      fclose($fh);
//            $fp = fopen("info.txt", "w+");
            $mytext = $_POST['yumserverip']." ".$_POST['yumserverrootpasswd'];
            file_put_contents("info.txt", $mytext);
            $content = file_get_contents($fp);
            $output = shell_exec('sh yum_test.sh');
            ?>" method = "post">
            <h4><?php echo $msg; ?></h4>
            <input type = "text" class = "form-control"
               name = "yumserverip" placeholder = "Enter your YUM SERVER IP"
               required autofocus></br>
            <input type = "text"
               name = "yumserverrootpasswd" placeholder = "Enter your YUM SERVER PASSWORD" required>
            <button type = "submit"
               name = "login">submit</button>
         </form>


</a>

      </div>

<div>Answer is: <?=$output;?></div>
<div>Contents is: <?=$mytext;?></div>

   </body>
</html>
