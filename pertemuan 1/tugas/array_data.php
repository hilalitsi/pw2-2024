<?php
    $fruits = [
      [
        "id" => 1,
        "nama" => "Apel",
        "warna" => "Merah",
        "stok" => 10,
        "harga" => 5000,
        "deskripsi" => "Buah apel memiliki kulit yang tipis dan berwarna yang bervariasi, termasuk merah, hijau, kuning, atau kombinasi dari keduanya. Daging buahnya berwarna putih hingga kuning terang, renyah atau lembut tergantung pada varietasnya, dan memiliki rasa manis dengan sedikit asam"
      ],

      [
        "id" => 2, 
        "nama" => "Mangga",
        "warna" => "Hijau",
        "stok" => 30,
        "harga" => 7000,
        "deskripsi" => "Mangga memiliki kulit yang bervariasi dari hijau hingga kuning, oranye, atau merah, tergantung pada varietasnya. Daging buahnya berwarna kuning, manis, dan sedikit berair dengan tekstur yang lembut atau renyah tergantung pada varietasnya. Mangga memiliki aroma yang khas dan rasa yang sangat manis saat matang sepenuhnya. Mangga dapat dimakan segar atau digunakan dalam berbagai hidangan, jus, atau pencuci mulut"
      ],

      [
        "id" => 3, 
        "nama" => "Jeruk",
        "warna" => "Oranye",
        "stok" => 20,
        "harga" => 8000,
        "deskripsi" => "Buah jeruk memiliki kulit yang tebal dan berwarna oranye atau kuning, tergantung pada varietasnya. Daging buahnya berwarna oranye atau kuning, berair, dan memiliki rasa manis dengan sedikit asam, tergantung pada jenisnya. Jeruk sering dimakan segar, dijadikan jus, atau digunakan dalam masakan dan pencuci mulut"
      ],

      [
        "id" => 4, 
        "nama" => "Rambutan",
        "warna" => "Merah",
        "stok" => 40,
        "harga" => 10.000,
        "deskripsi" => "Rambutan memiliki kulit berwarna hijau atau merah muda dengan bulu-bulu halus yang lembut. Ketika dikupas, dagingnya berwarna putih transparan dan manis, biasanya memiliki rasa yang segar dengan sedikit keasaman. Di tengah dagingnya terdapat biji yang tidak dapat dimakan"
      ],

      [
        "id" => 5,
        "nama" => "Pisang",
        "warna" => "Kuning",
        "stok" => 30,
        "harga" => 3000,
        "deskripsi" => "Buah pisang memiliki kulit yang tebal, berwarna kuning ketika matang, dan bisa berwarna hijau atau bahkan merah ketika belum matang. Daging buahnya berwarna putih atau kuning pucat, lembut, dan manis, dengan tekstur yang krem atau sedikit renyah tergantung pada varietasnya"
      ]
    ]
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <title>Array Table Buah</title>
</head>
<body>
  <div class="container text-center mt-5 mb-4">
    <h1 class="text-center mt-5 mb-4">Daftar Buah</h1>
    <table class="table table-striped table-hover table-bordered">
      <thead class="thead-dark">
        <tr>
          <th>ID</th>
          <th>Nama</th>
          <th>Warna</th>
          <th>Stok</th>
          <th>Harga</th>
          <th>Deskripsi</th>
        </tr>
      </thead>

      <tbody>
        <?php
          foreach ($fruits as $fruit) {
            echo "<tr>";
            echo "<td>" . $fruit["id"];
            echo "<td>" . $fruit["nama"];
            echo "<td>" . $fruit["warna"]; 
            echo "<td>" . $fruit["stok"];
            echo "<td>" . $fruit["harga"];
            echo "<td>" . $fruit["deskripsi"];
          }
        ?>
      </tbody>
    </table>
  </div>
</body>
</html>
