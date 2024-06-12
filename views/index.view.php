<!DOCTYPE html>
<html>

<?php require("partials/header.php"); ?>

<body>
<?php require("partials/nav.php"); ?>
    <table id="boodschappenlijst">
        <thead>
            <tr>
            <th>Product</th>
                <th>Prijs</th>
                <th>Aantal</th>
                <th>Subtotaal</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            for  ($i=0; $i<count($boodschappen); $i++):
            ?>
            <tr>
                <td class="product"> <?=htmlspecialchars($boodschappen[$i]["Name"]); ?></td>
                <td class="productPrice"><?=htmlspecialchars($boodschappen[$i]["Price"]); ?></td>
                <td class="aantal"><input class="productQuantity" type="number" value="<?= htmlspecialchars($boodschappen[$i]["Quantity"]);?>", min="0"></input></td>
                <td class="productTotalCost"><?=number_format((float) $subtotals[$i], 2, ".", ""); ?></td>
            </tr>
           <?php endfor; ?> 
        </tbody>
        <tfoot>
            <tr>
                <td colspan="3">Totaal</td>
                <td class="totalCost"><?= number_format((float)$total, 2, ".", ""); ?></td>
            </tr>
        </tfoot>
    </table>
   
</body>
<?php require("partials/footer.php"); ?>
</html>

