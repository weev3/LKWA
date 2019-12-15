<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <button type="button" name="button" onclick="openPopup()">Open</button>
    <button type="button" name="button" onclick="sendCustomMessage()">Send</button>

    <script>
    function openPopup(){
      popup = open("http://localhost:8081/lesser_known/test/test.php");
    }
    function sendCustomMessage(){
      popup.postMessage("Hi There!","http://localhost:8081/lesser_known/test/test.php")
    }
    </script>
  </body>
</html>
