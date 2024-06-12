<!DOCTYPE html>
<html>

<?php require("partials/header.php"); ?>

<body>
<?php require("partials/nav.php"); ?>

<form method="POST" >
<label for="name">Name</label> <input type="text" id="name" name="name" required></input>
<label for="price">Price</label> <input type="text" id="price" name="price" required></input>
<label for="quantity">Quantity</label> <input type="number" id="quantity" name="quantity"></input>
<input type="submit" id="submit" name="submit"></input>
</form>
   
</body>
<?php require("partials/footer.php"); ?>
</html>
