<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">

<link rel="stylesheet" type="text/css" href="prove03.css">
<script src="prove03.js">
</script>
<title>Frek bicycles</title>

<?php
session_start();

$_SESSION = $_POST;

?>
<body>
    <form action="prove03.php" method="POST">
        <div class="display">
            <div id="items">
                <h1>Please check the items you wish to buy</h1>
                <hr />
                <div id="pic1">
                    <input id="blue" type="checkbox" name="1st_item" onclick="total(400,1),display(),update()">
                    <img id="bluebike" src="https://static.canyon.com/img/cache/a7/7/5362df1682f691714d7ea29e99aaa.jpg" alt="cf 9.0">
                    <p id="name1">Blue mountain bike </p>
                    <p class="price1">$400</p>
                </div>
                <hr />
                <div id="pic2">
                    <br />
                    <input id="dark" type="checkbox" name="2nd_item" onclick="total(300,2), display(),update()">
                    <img id="darkbike" src="https://static.canyon.com/img/cache/d7/e/6b55557cc3f49faebc0bab04faa99.jpg" alt="cf 7.0">
                    <p id="name2">Black mountain bike </p>
                    <p class="price2">$300</p>
                </div>
                <hr />
                <div id="pic3">
                    <br />
                    <input id="lube" type="checkbox" name="3rd_item" onclick="total(10,3), display(),update()">
                    <img id="lubepic" src="https://s7d2.scene7.com/is/image/academy/10061191?$m-pdp-product-image$" alt="cf 8.0">
                    <p id="name3">Bike chain lube </p>
                    <p class="price3">$10</p>
                </div>
                <hr />
                <div id="pic4">
                    <br />
                    <input id="lube2" type="checkbox" name="4th_item" onclick="total(20,4), display(),update()">
                    <img id="lubepic2" src="https://images-na.ssl-images-amazon.com/images/I/41PRtfwPOSL._SX342_.jpg" alt="cf 6.0">
                    <p id="name4">Adavanced Bike chain lube </p>
                    <p class="price4">$20</p>
                </div>
                <hr />
                <div id="total">
                    <span>Subtotal amount : $</span>
                    <span id="amount">0</span>
                </div>
                <div id="buttons">
                    <input type="submit" id="submit" onclick="fun(),update()" value="Add to cart" />
                    <input type= "button" id="view" onclick="location.href='prove03_p.php'" value="View your cart" />
                </div>
            </div>
        </div>
    </form>


    <footer>
        <p>&copy; 2020 Frek Bikes || Hyde Xu
            <p>
                <div class="iconcommon">
                    <div class="fb">
                        <a href="https://www.facebook.com" target="_blank"><img src="https://byui-cit.github.io/wdd100/images/icons/color/facebook.png" alt="facebook"></a>
                    </div>
                    <div class="tw">
                        <a href="https://www.twitter.com" target="_blank"><img src="https://byui-cit.github.io/wdd100/images/icons/color/twitter.png" alt="twitter"></a>
                    </div>
                    <div class="yt">
                        <a href="https://www.youtube.com" target="_blank"><img src="https://byui-cit.github.io/wdd100/images/icons/color/youtube.png" alt="youtube"></a>
                    </div>
                </div>
    </footer>





</body>

</html>