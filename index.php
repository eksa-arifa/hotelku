<?php
include_once "./koneksi/conn.php";


$query = mysqli_query($conn,"SELECT * FROM kamar");
?>
<?php require './layout/header.php';?>

    <!-- Jumbotron Gess -->
    <div class="jumbotron">
        <div class="wrapper">
            <h1>Enjoy Your Travel</h1>
            <p>Enjoy your holiday with comfortable, strategic, luxurious and affordable accommodation.</p>
            <div class="btn">
                <a href="#">Explore Now</a>
            </div>
        </div>
    </div>
    <!-- Akhir Jumbotron Gess Yaaaaa -->

    <!-- Facility Section Ya Gessss Yaaa -->
    <div class="facility">
        <div class="left">
            <img id="satu" src="https://i.pinimg.com/originals/86/9e/f4/869ef4f3c37ac0118ce9f7b9ce774f13.png" alt="Room">
            <img id="dua" src="https://images8.alphacoders.com/458/458482.jpg" alt="Swimming Pool">
        </div>
        <div class="right">
            <h2>Facility</h2>
            <p>hotel is the second most comfortable place after your home, we provide various facilities to help you with your daily activities, including:</p>
            <ul>
                <li><i class="fa-solid fa-circle-check"></i>Luxury Restaurant</li>
                <li><i class="fa-solid fa-circle-check"></i>Executive Suite</li>
                <li><i class="fa-solid fa-circle-check"></i>Meeting room</li>
                <li><i class="fa-solid fa-circle-check"></i>Swimming Pool</li>
                <li><i class="fa-solid fa-circle-check"></i>Free Wifi</li>
                <li><i class="fa-solid fa-circle-check"></i>laundry and cleaning services</li>
                <li><i class="fa-solid fa-circle-check"></i>fitness center</li>
                <li><i class="fa-solid fa-circle-check"></i>cafe</li>
                <li><i class="fa-solid fa-circle-check"></i>Car Rent</li>
            </ul>
        </div>
    </div>
    <!-- Ens Facility Section Gesss -->

    <!-- Room Section Gaes -->
    <div class="room" id="room">
        <h1>Choose Your Luxury Room</h1>
        <p>Whatever the choice, you will still be served wholeheartedly and equally.</p>
        <div class="box">
            <?php while($f = mysqli_fetch_array($query)) : ?>
            <div class="item">
                <img src="https://www.ronenbekerman.com/wp-content/uploads/2019/05/4K-Bedroom-Switzerland.jpg" alt="Luxury">
                <div class="flex">
                    <h2><?= $f["nama_kamar"] ?></h2>
                    <p>Rp.<?= $f["harga_kamar"]?>,00</p>
                </div>
                <p>Jumlah Tersisa: <?= $f["jumlah_tersisa"]?><br>Jumlah Maksimal: <?= $f["jumlah_maksimal"]?></p>
                <div class="star">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </div>
                <div class="button">
                    <a href="./pages/booking/?id=<?= $f["id"]?>">Book Now</a>
                </div>
            </div>
            <?php endwhile; ?>
        </div>
    </div>
    <!-- End Room Section guys -->

    <!-- Contac Section Gaess -->
    <div class="contact" id="contact">
        <h2>Contact Us</h2>
        <p>Be closer to us</p>
        <div class="box">
            <img src="https://images5.alphacoders.com/372/thumb-1920-372649.jpg" alt="beach">
            <form action="">
                <h2>Get In Touch</h2>
                <p>Maybe you want to collaborate or have criticism and suggestions.</p>
                <label for="nama">
                    <span>Nama:</span>
                    <input type="text" id="nama" name="nama">
                </label>
                <label for="email">
                    <span>Email:</span>
                    <input type="text" id="email" name="email">
                </label>
                <label for="sub">
                    <span>Subject:</span>
                    <input type="text" id="sub" name="sub">
                </label>
                <label for="msg">
                    <span>Message:</span>
                    <textarea name="msg" id="msg" cols="30" rows="10"></textarea>
                </label>
                <button type="submit">Send</button>
            </form>
        </div>
    </div>
    <!-- End Contact Section Ges -->


    <?php require './layout/footer.php';?>