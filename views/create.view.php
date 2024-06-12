<!DOCTYPE html>
<html>

<?php require("partials/header.php"); ?>

<body>
<?php require("partials/nav.php"); ?>

<form method="POST" >
<label for="name">Name</label> <textarea id="name" name="name" rows=2 cols=20 > <?= $_POST["name"] ?? ""; ?> </textarea> 
<br>
<?php if (isset($errors["name"])) : ?>
    <p class="errors"> <?= $errors["name"]; ?> </p>
<?php endif; ?>  
<label for="price">Price</label> <textarea id="price" name="price" rows=1 cols=20 > <?= $_POST["price"] ?? ""; ?>  </textarea>
<br>
<?php if (isset($errors["price"])) : ?>
    <p class="errors"> <?= $errors["price"]; ?> </p>
<?php endif; ?> 
<label for="quantity">Quantity</label> <input type="number" id="quantity" name="quantity"  >
<br>
<?php if (isset($errors["quantity"])) : ?>
    <p class="errors"> <?= $errors["quantity"]; ?> </p>
<?php endif; ?> 
<input type="submit" id="submit" name="submit"> 
</form>

</body>
<?php require("partials/footer.php"); ?>
</html>
