<?php
session_start(); // Memulai sesi
?>

<!DOCTYPE html>
<html>
<head>
    <title>Listing Produk</title>
  <link rel="stylesheet" type="text/css" href="asset/listing.css">


</head>
<body>
    
    <h2>Selamat datang| Silahkan Pilih Barang yang anda butuhkan, <?php echo $_SESSION['username']; ?>!</h2>
    <h3>Daftar Barang:</h3>
    <!-- Tambahkan ini di dalam konten file listing_produk.php -->
<a href="dashboard.php" class="btn btn-primary">Menuju Dashboard LTE</a>

    <div class="product-container">

    
        <?php
        // Data produk (nama, deskripsi, harga, dan nama gambar)
        $products = array(
            array("Spalding", "Bola Basket", 100, "avatar1.png"),
            array("Spalding", "Bola Basket", 100, "avatar1.png"),
            array("Bola Sepak", "Bola Sepak", 200, "avatar6.png"),
            array("Spalding", "Bola Basket", 100, "avatar1.png"),
            array("Bola Sepak", "Bola Sepak", 200, "avatar6.png"),
            array("Bola Sepak", "Bola Sepak", 200, "avatar6.png"),
        );

        // Loop untuk menampilkan produk
        foreach ($products as $product) {
            echo '<div class="product">';
            echo '<img src="asset/images/' . $product[3] . '" alt="' . $product[0] . '">';
            echo '<h4>' . $product[0] . '</h4>';
            echo '<p>' . $product[1] . '</p>';
            echo '<p>Harga: $' . $product[2] . '</p>';
            echo '</div>';
        }
        ?>
    </div>
    <a href="index.php">Logout</a>
</body>
</html>
