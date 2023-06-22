<?php
    include("conection.php");
    
    // Mengambil data pencarian dari request Ajax
    $searchValue = $_POST['search'];

    // Mengambil data produk dari database yang sesuai dengan pencarian
    $sql = "SELECT * FROM product WHERE name LIKE '%$searchValue%'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Menampilkan data produk yang sesuai dengan pencarian
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
        echo "";
    }
?>