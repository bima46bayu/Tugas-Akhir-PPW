Nama : Bima Bayu Sofana

Latar Belakang : Kita sering menjumpai caffee-caffee yang sangat ramai sehingga terjadi penumpukan ketika kita membeli sebuah kopi, dengan adanya wesite ini, customer bisa langsung memesan kopi tanpa mengantri lagi di depan mesin kasir.

Kebutuhan client : fungsi utama dari website ini adalah, mempermudah dalam pembelian kopi ketika kita datang ke sebuah coffeeshop. Tidak hanya itu, dengan adanya website ini secara tidak langsung pihak caffe ikut memperkenalkan produk produk yang dimiliki.

Permasalahan yang di-cover dengan website: Website coffeeshop dapat mencakup beberapa permasalahan yang ingin diatasi, antara lain:

a. Visibilitas online: Pemilik kafe ingin meningkatkan kehadiran online mereka dan membuat kafe mereka mudah ditemukan oleh pengunjung potensial. Dengan memiliki website, kafe tersebut dapat muncul dalam hasil pencarian di mesin pencari dan mencapai audiens yang lebih luas.

b. Informasi yang lengkap: Website dapat memberikan platform untuk menampilkan informasi lengkap tentang kafe, termasuk menu, harga, deskripsi produk, kebijakan pembayaran, dan kontak. Hal ini membantu menghindari ketidakjelasan atau kesalahpahaman potensial yang mungkin timbul jika informasi hanya tersedia di media sosial atau tempat lain.

c. Interaksi dengan pelanggan: Website coffeeshop dapat memberikan sarana interaksi dengan pelanggan, baik melalui formulir kontak, chat langsung, atau integrasi media sosial. Ini memungkinkan pelanggan untuk mengajukan pertanyaan, memberikan umpan balik, atau membuat reservasi secara online, meningkatkan keterlibatan dan memperkuat hubungan dengan pelanggan.

d. Peningkatan penjualan: Melalui website, kafe dapat menawarkan pembelian online bagi pelanggan yang ingin membeli produk kopi atau merchandise tanpa harus mengunjungi langsung kafe. Ini dapat membantu meningkatkan penjualan dan pendapatan kafe secara keseluruhan.


Desain Rapi :
Kode menunjukkan struktur dasar sebuah halaman HTML untuk website coffeeshop dengan penggunaan elemen header, section, nav, h1, p, a, ul, li, dan footer.
Desain rapi diwujudkan dengan tata letak yang jelas, penggunaan font yang mudah dibaca, dan kontras warna yang memadai.
Kode CSS yang terkait dengan desain seperti ukuran font, warna latar belakang, dan tata letak dapat diatur di file "styles.css" terpisah untuk memisahkan logika desain dari struktur HTML.
Semua container dalam satu ukuran yang sama.

Responsive :

/* Media Queries */

/* Laptop */
@media (max-width: 1366px){
    html {
        font-size: 75%;
    }
}
/* Tablet */
@media (max-width: 768px){
    html {
        font-size: 62.5%;
    }
    #hamburger-menu{
        display: inline-block;
    }
    .navbar .navbar-nav{
        position: absolute;
        top: 100%;
        right: -100%;
        background-color: #fff;
        width: 30rem;
        height: 100vh;
        transition: 0.3s;
    }
    .navbar .navbar-nav.active{
        right: 0;
    }
    .navbar .navbar-nav a{
        color: var(--bg);
        display: block;
        margin: 1.5rem;
        padding: 0.5rem;
        font-size: 2rem;
    }
    .navbar .navbar-nav a::after{
        transform-origin: 0 0;
    }
    .navbar .navbar-nav a:hover::after{
        transform: scaleX(0.2);
    }
    .navbar .search-form{
        width: 90%;
        right: 2rem;
    }

    .about .row{
        flex-wrap: wrap;
    }
    .about .row .about-img img{
        height: 24rem;
        object-fit: cover;
        object-position: center;
    }
    .about .row .content{
        padding: 0;
    }
    .about .row .content h3{
        margin-top: 1rem;
        font-size: 2rem;
    }
    .about .row .content p{
        font-size: 1.6rem;
    }

    .menu p{
        font-size: 1.2rem;
    }

    .contact .row{
        flex-wrap: wrap;
    }
    .contact .row .map{
        height: 30rem;
    }
    .contact .row form{
        padding: 0;
    }
}
/* Mobile */
@media (max-width: 450px){
    html {
        font-size: 55%;
    }
}

Potongan kode di atas menunjukkan penggunaan media query CSS untuk mengatur tampilan website pada berbagai ukuran layar.
Dalam contoh ini, pengaturan tata letak menu berbeda untuk tampilan mobile (ukuran layar maksimum 767px), tablet (ukuran layar antara 768px dan 1023px), dan perangkat lainnya.
Media query juga digunakan untuk mengatur lebar maksimum konten agar sesuai dengan perangkat yang digunakan.

Direct Feedback ke Pengguna Website :

// toggle class active
const navbarNav = document.querySelector
('.navbar-nav');

// ketika hamburger menu di klik
document.querySelector('#hamburger-menu').onclick = (e) => {
    navbarNav.classList.toggle('active');
    e.preventDefault();
}

// toggle class active untuk search form
const searchForm = document.querySelector('.search-form');
const searchBox = document.querySelector('#search-box');
document.querySelector('#search-button').onclick = (e) => {
    searchForm.classList.toggle('active');
    searchBox.focus();
    e.preventDefault();
};

// Klik di luar element
const hm = document.querySelector('#hamburger-menu');
const sb = document.querySelector('#search-button');
document.addEventListener('click', function(e) {
    if(!hm.contains(e.target) && !navbarNav.contains(e.target)){
        navbarNav.classList.remove('active');
    }
    if(!sb.contains(e.target) && !searchForm.contains(e.target)){
        searchForm.classList.remove('active');
    }    
});

Potongan kode diatas merupakan salah satu fitur feedback ke pengguna. Ketika kita berada pada layar tablet atau mobile, akan muncul hamburger menu, ketika ikon tersebut di klik akan menampilkan sidebar, dan ketika kita menekan page selain sidebar, maka sidebar akan tertutup.

Dinamis :
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

Potongan kode diatas adalah salah satu fitur dinamis yang dimiliki website ini. Yaitu website akan mengambil value daftar menu yang ada di dalam database. 

