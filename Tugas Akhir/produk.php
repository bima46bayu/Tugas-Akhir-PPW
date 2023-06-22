<?php
require_once('conection.php');
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
<style>
    .search-form {
    margin-bottom: 0.5rem;    
    text-align: center;
    }

    .search-form input[type="text"] {
    width: 40%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 16px;
    margin-top: 15rem;
    }

    .search-form input[type="text"]:focus {
    outline: none;
    border-color: #0066cc;
    }

    .search-form input[type="text"]::placeholder {
    color: #999;
    }
</style>
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
    </nav>

    <div class="search-form">
        <input type="text" id="search" placeholder="Cari produk...">
    </div>

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

        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script>
        $(document).ready(function() {
            $('#search').on('input', function() {
                var searchValue = $(this).val();

                // Mengirim permintaan pencarian ke server menggunakan Ajax
                $.ajax({
                    url: 'search.php', // Ganti dengan URL ke file PHP yang akan menangani pencarian
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
    