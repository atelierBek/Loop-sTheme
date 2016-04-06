<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="submit.js"></script>
</head>
<body>
  <form method="post" action="" name="loginform">
    <input type="text" id="comp_name" />
    <input type="text" id="comp_code" />
    <input type="text" id="comp_code2" />
    <button type="button" onClick="submitdata();">Submit</button>
    <button id="reset" type="reset">Reset</button>
  </form>
    <p id ="msg"></p>
</body>
</html>
