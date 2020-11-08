<!DOCTYPE html>
<html>
<head>
<title>File upload</title>
<b><h1 style="color:red;text-align: center;  ">Upload your news</h1></b>
</head>
<body style="background-color: lightgreen;">
<form action="submit5" method="POST" enctype="multipart/form-data" name="file1">@csrf

<input type="file" name="file1" style="margin-top: 200px; margin-left: 600px;" ><br><br><br>
<input type="submit" name="submit" style="margin-top: 25px; margin-left: 600px; color: blue" >
</form>
</body>
</html>