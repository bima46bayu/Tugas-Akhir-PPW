<?php
include ('conection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kopi Kita</title>
    <link rel="stylesheet" href="style.css">
<!-- Font -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&display=swap" rel="stylesheet">
<!-- Feather Icon -->
    <script src="https://unpkg.com/feather-icons"></script>
</head>
<body>  
    <!-- Navbar start -->
    <nav class="navbar">
        <a href="#" class="navbar-logo">kenangan<span>senja</span>.</a>
        <div class="navbar-nav">
            <a href="#home">Home</a>
            <a href="#about">Tentang Kami</a>
            <a href="#menu">Menu</a>
            <a href="#contact">Kontak</a>
        </div>
        <div class="navbar-extra">
            <a href="#" id="search-button"><i data-feather="search"></i></a>
            <a href="#" id="shopping-cart"><i data-feather="shopping-cart"></i></a>
            <a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>
        </div>

        <!-- Search form start -->
        <div class="search-form">
            <input type="search" id="search-box" placeholder="search here...">
            <label for="search-box"><i data-feather="search"></i></label>
        </div>
        <!-- Search form end -->
    </nav>
    <!-- Navbar end -->
     <!-- Hero section start -->
    <section class="hero" id="home">
        <main class="content">
            <h1>Mari Nikmati Secangkir <span>Kopi</span></h1>
            <p>Sesempurna apapun kopi yang kamu buat, kopi tetaplah kopi, punya sisi pahit yang tak mungkin kamu sembunyikan.</p>
            <a href="produk.php" class="cta">Beli Sekarang</a>
        </main>
    </section>
    <!-- Hero section end -->  
    <!-- About section start -->
    <section id="about" class="about">
        <h2><span>Tentang</span> Kami</h2>
        <div class="row">
            <div class="about-img">
                <img src="tentang kami.jpg" alt="Tentang Kami">
            </div>
            <div class="content">
                <h3>Kenapa memilih kami</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa modi nostrum voluptatibus laborum, ut illo itaque dolorem assumenda, tempora ipsam perferendis doloremque maxime recusandae dicta, consequatur sequi delectus veritatis voluptates.</p>
            </div>
        </div>
    </section>
    <!-- About section end -->
    
    <!-- Menu section start-->
    <section id="menu" class="menu">
        <h2><span>Menu</span> Kami</h2>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit odio, omnis repudiandae perferendis voluptatem assumenda!</p>
        <div class="row">
            <?php
            // Mengambil data produk dari database
                $sql = "SELECT * FROM product";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // Menampilkan data produk
                    while($row = $result->fetch_assoc()) {
                        $namaProduk = $row["name"];
                        $gambar = $row["gambar"];
                        $harga = $row["price"];

                        echo '<div class="menu-card">';
                        echo '<img src="' . $gambar . '" alt="' . $namaProduk . '">';
                        echo '<h3 class="menu-card-title">-' . $namaProduk . '-</h3>';
                        echo '<p class="menu-card-price">IDR ' . $harga . '</p>';
                        echo '<div class="menu-icon">';
                        echo '<a href="#"><i data-feather="shopping-cart"></i></a>';
                        echo '<a href="#"><i data-feather="eye"></i></a>';
                        echo '</div>';
                        echo '</div>';
                    }
                } else {
                    echo "Tidak ada data produk.";
                }
            ?>
        </div>
    </section>
    <!-- Menu section end-->
    <section id="contact" class="contact">
        <h2><span>Kontak</span> Kami</h2>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit odio, omnis repudiandae perferendis voluptatem assumenda!</p>
        <div class="row">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63245.97055414075!2d110.37484495000001!3d-7.803250450000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a5787bd5b6bc5%3A0x21723fd4d3684f71!2sYogyakarta%2C%20Yogyakarta%20City%2C%20Special%20Region%20of%20Yogyakarta!5e0!3m2!1sen!2sid!4v1686298144243!5m2!1sen!2sid" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="map"></iframe>
            <form action="">
                <div class="input-group">
                    <i data-feather="user"></i>
                    <input type="text" placeholder="nama">
                </div>
                <div class="input-group">
                    <i data-feather="mail"></i>
                    <input type="text" placeholder="email">
                </div>
                <div class="input-group">
                    <i data-feather="phone"></i>
                    <input type="text" placeholder="nomor hp">
                </div>
                <button type="submit" class="btn">Kirim Pesan</button>
            </form>
        </div>
    </section>
    <!-- Contact section start-->
    <!-- footer start-->
    <footer>
        <div class="socials">
            <a href="#"><i data-feather="instagram"></i></a>
            <a href="#"><i data-feather="twitter"></i></a>
            <a href="#"><i data-feather="facebook"></i></a>
        </div>
        <div class="links">
            <a href="#home">Home</a>
            <a href="#about">Tentang Kami</a>
            <a href="#menu">Menu</a>
            <a href="#contact">kontak</a>
        </div>
        <div class="credit">
            <p>Created by <a href="">bimabayusofana</a>. | &copy; 2023.</p>
        </div>
    </footer>
    <!-- footer end-->
    <!-- Contact section end-->
    <!-- Feather Icon -->
    <script>
        feather.replace()
      </script>
    <!-- Javasript -->
    <script src="script.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script>
        $(document).ready(function() {
            $('#search').on('input', function() {
                var searchValue = $(this).val();

                // Mengirim permintaan pencarian ke server menggunakan Ajax
                $.ajax({
                    url: 'produk.php', // Ganti dengan URL ke file PHP yang akan menangani pencarian
                    method: 'POST',
                    data: { search: searchValue },
                    success: function(response) {
                        $('.menu-card').remove(); // Menghapus semua menu-card yang ada

                        if (response != '') {
                            // Menambahkan hasil pencarian ke dalam div dengan class "row"
                            $('.row').append(response);
                        } else {
                            $('.row').append('<p>Tidak ada hasil pencarian.</p>');
                        }
                    }
                });
            });
        });
        </script>
</body>
</html>
