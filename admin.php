<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Jebaskut</title>
    <link rel="stylesheet" href="dashboard/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="dashboard/css/style.css" type="text/css">
    <style>
       
        body, ul {
            margin: 0;
            padding: 0;
        }
        
        body {
            background-image: url("/foto/images.jpeg");
            font-family: Arial, sans-serif;
        }
        
        .banner {
            background-color: #292c3e;
            color: white;
            text-align: center;
            padding: 20px;
        }
        
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .jebaskut {
            font-size: 24px;
            margin: 0;
        }
        
        .navbar ul {
            list-style: none;
            display: flex;
        }
        
        .navbar ul li {
            margin: 0 15px;
        }
        
        .navbar ul li a {
            text-decoration: none;
            color: white;
        }
        
        .content {
            text-align: center;
            padding: 20px;
        }
        
        h2 {
            font-size: 32px;
            margin-bottom: 10px;
        }
        
        p {
            font-size: 16px;
        }
        
        .content a {
            text-decoration: none;
            margin: 10px;
        }
        
        .content button {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
        }
        
       .content button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="banner">
        <div class="navbar">
            <h1 class="jebaskut">HOTEL JEBASKUT</h1>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="kamar.php">Kamar</a></li>
                <li><a href="pelanggan.php">Pelanggan</a></li>
                <li><a href="pegawai.php">Pegawai</a></li>
                <li><a href="pemesanan.php">Pemesanan</a></li>
            </ul>
        </div>

        <div class="content">
            <h2>Selamat Datang</h2>
            <p>Hubungi pembuat web untuk perbaikan</p>
            <div>
                <a href="https://wa.me/6288216792402">
                    <button type="button">WhatsApp</button>
                </a>
                <a href="https://instagram.com/rmadhan_pann?igshid=NzZlODBkYWE4Ng==">
                    <button type="button">Instagram</button>
                </a>
            </div>
        </div>
    </div>
</body>
</html>
