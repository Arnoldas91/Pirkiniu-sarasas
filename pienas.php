<?php for ($i = 0; $i < count($_SESSION['shop']); $i++) {
      if ($_SESSION['shop'][$i]['category'] == "Pieno gaminiai") { ?>
            <tr>
                  <td><?= $_SESSION['shop'][$i]['item'] ?></td><br>
            </tr>
<?php }
} ?>
