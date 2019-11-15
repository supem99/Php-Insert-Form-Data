
<html>

<head>
 <title> PHP INSERT DATA </title>
    <link rel="stylesheet" href="vender/css/bootstrap.css">
    <link rel="stylesheet" href="vender/css/bootstrap-grid.css">
    <link rel="stylesheet" href="vender/css/bootstrap-reboot.css">
    <script src="vender/js/bootstrap.bundle.js"></script>
    <script src="vender/js/bootstrap.js"></script>
</head>

<body>

<div class="container">
<div class="row">
<div class="col-md-6">

<pre>

<form action="db_op.php" method="post">

    First Name      <input type="text" name="f_name" required ><br><br>

    Last Name       <input type="text" name="l_name" required><br><br>

    Age             <input type="number" name="age" required  min="10" max="99"><br><br>

    <input type="submit" name="insert" value="Add to Data">  <input type="reset"  value="reset">

</pre>

</div>
</div>
</div>

</form>

</body>

</html>
