<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="prove03.css">

<title>Purchase Review</title>

<body>
   <div class="display">
      <div id="items">
         <br>Your cart: <br>
         <?php
         session_start();
         $total = 0;
         echo "<table><tr><th>Item name</th><th>Price</th>";

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
         echo "<tr><td>Total:</td><td>$" . $total . "</td></tr></table>";

         ?>
         <form action="prove03_c.php" method="POST">
            <input size="25" id="3" name="address" placeholder="Address" onchange="addressTest(this.value,1),update()">
            <br>
            <input size="10" id="4" name="city" placeholder="City" onchange="addressTest(this.value,2),update()">
            <br>
            <input size="10" id="5" name="state" placeholder="State" onchange="addressTest(this.value,3),update()">
            <br>
            <input type="submit" name="checkout" value="Submit">
            <input type="button" onclick="location.href='prove03.php'" name="cancel" value="Cancel">
         </form>
      </div>
   </div>

</body>