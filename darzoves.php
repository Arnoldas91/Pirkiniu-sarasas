<?php for ($i = 1; $i < count($_SESSION['shop']); $i++) {
      if ($_SESSION['shop'][$i]['category'] == "Daržovės ir vaisiai") { ?>
            <tr>
                  <td class="DVaisiai"> <?= $_SESSION['shop'][$i]['item'] ?></td><br>
            </tr>
<?php }
} ?>

<style>


</style>