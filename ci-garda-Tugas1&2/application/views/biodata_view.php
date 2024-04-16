<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            width: 80%;
            margin: auto;
            background: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
        }
        .biodata {
            margin-bottom: 20px;
        }
        .biodata label {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Biodata</h1>
        <div class="biodata">
            <label for="nama">Nama:</label>
            <span id="nama"><?php echo $nama; ?></span>
        </div>
        <div class="biodata">
            <label for="nim">Nim:</label>
            <span id="nim"><?php echo $nim; ?></span>
        </div>
        <div class="biodata">
            <label for="alamat">Alamat:</label>
            <span id="alamat"><?php echo $alamat; ?></span>
        </div>
        <div class="biodata">
            <label for="pekerjaan">Pekerjaan:</label>
            <span id="pekerjaan"><?php echo $pekerjaan; ?></span>
        </div>
        <div class="biodata">
            <label for="email">Email:</label>
            <span id="email"><?php echo $email; ?></span>
        </div>
        <div class="biodata">
            <label for="no_hp">NoHP:</label> <!-- Mengganti Telepon menjadi NoHP -->
            <span id="no_hp"><?php echo $no_hp; ?></span> <!-- Mengganti Telepon menjadi NoHP -->
        </div>
    </div>
</body>
</html>
