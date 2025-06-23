<?php
include '../controller/userauth.php';


?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PT. Ananda Lintas Cakrawala</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alata&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Titan+One&display=swap" rel="stylesheet">
    
    <style>
        :root{
            /*Variabel color*/
            --var-color-tersier: #035F79;
            --var-color-font-gray: #666666;
            --var-color-font-tosca: #D4FADB; 
            --var-color-font-red: #D23201; 
            --var-color-1: #1F4E78;
            --var-color-darkblue: #001F3F;
            --var-col-btn-green: #34C759;
            --var-col-btn-orange: #FF9500;
            --var-font-basic: poppins ;
        }
        header{
            background-color: var(--var-color-tersier);
        }
    </style>
</head>
<body class="font-poppins antialiased text-gray-800">

    
    
    <!-- Navbar -->
    <nav>
      <?php 
        include '../componen/navbarIndex.php';
      ?>
    </nav>

  <main class="flex ">
        <!-- Hero Section -->
    <section class="flex flex-col md:flex-row items-center justify-between px-8 py-12 bg-gray-50 w-full">
        <div class="md:w-1/2 space-y-4">
            <h1 class="text-3xl font-bold text-gray-800 leading-snug">
                Selamat datang <?= $_SESSION['nama'] ?>
            </h1>
            <p class="text-blue-800 text-sm">
                Kami membuka peluang bagi individu berdedikasi dan bersemangat untuk menjadi bagian dari revolusi digital di dunia distribusi.
            </p>
        </div>
    </section>

    <!-- Mengapa Bergabung -->
    <section class="flex flex-col md:flex-row items-center px-8 py-16 w-full">
          <?php include '../componen/card.php' ?>
    </section>

  </main>

    <!-- Footer -->
    <footer>
        <?php include '../componen/footer.php'; ?>
    </footer>

</body>
</html>
