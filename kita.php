<?php for ($i = 0; $i < count($_SESSION['shop']); $i++) {
      if ($_SESSION['shop'][$i]['category'] == "Kita") { ?>
            <tr>
                  <td><?= $_SESSION['shop'][$i]['item'] ?></td><br>
            </tr>
<?php }
} ?>