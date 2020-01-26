<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="prove03.css">
<title>Purchase completed</title>

<body>
<div class="display">
      <div id="items">
    <h1>Purchase completed</h1>
    <table>
        <tr>
            <th>Item name</th>
            <th>Price</th>
        <tr>Purchase information:</tr>
                <?php
                session_start();
                $total = 0;

                foreach ($_SESSION as $key => $value) {
                    if ($key == '1st_item') {
                        echo "<tr><td>Blue mountain bike </td><td>$400</td></tr>";
                        $total += 400;
                    }
                    if ($key == '2nd_item') {
                        echo "<tr><td>Black mountain bike </td><td>$300</td></tr>";
                        $total += 300;
                    }
                    if ($key == '3rd_item') {
                        echo "<tr><td>Bike chain lube </td><td>$10</td></tr>";
                        $total += 10;
                    }
                    if ($key == '4th_item') {
                        echo "<tr><td>Adavanced Bike chain lube </td><td>$20</td></tr>";
                        $total += 20;
                    }
                }
                echo "<tr><td>total</td><td>$" . $total . "</td></tr></table>";
                echo "Shipping address: " . $_POST['address'] . ", " . $_POST['city'] . ", " . $_POST['state'];
                ?>
            </div>
        </div>
</body>