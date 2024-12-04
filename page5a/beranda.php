<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Court</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
        }

        .hero-section {
            background-color: #6F4F37;
            color: white;
            padding: 100px 20px 125px 20px;
            text-align: center;
            border-radius: 10px;
            margin-bottom: 125px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .hero-section h2 {
            font-size: 36px;
            margin-bottom: 20px;
            font-weight: 600;
        }

        .hero-section p {
            font-size: 18px;
            margin-bottom: 30px;
        }

        .hero-section hr {
            width: 80px;
            border: 2px solid white;
            margin: 20px auto;
        }

        .cta-button {
            padding: 15px 30px;
            background-color: white;
            color: #6F4F37;
            font-size: 18px;
            font-weight: 600;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .cta-button:hover {
            background-color: #ff5200;
        }

    </style>
</head>
<body>

    <!-- Hero Section -->
    <div class="hero-section">
        <h2>Selamat datang di Food Court</h2>
        <p>Web aplikasi Food Court ETAM, tempat berbagi kenyamanan dan kemudahan dalam menikmati kuliner!</p>
        <hr>
        <a href="my.php?p=menu" class="cta-button">Lihat Menu</a>
    </div>

</body>
</html>
