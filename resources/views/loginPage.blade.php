<html>
<head></head>

<body>

<form method="POST" action="/getId">
  {{ csrf_field() }}
  Roll No : <input type="int" name="roll"></br>
  Device id :<input type="int" name ="id">  </br>
  <input type ="submit" value = "submit">
</form>
</body>

</html>
