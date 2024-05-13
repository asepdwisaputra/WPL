<html>

<head>
    <title>Tugas Upload</title>
</head>

<body>
    <center>
        <h1>Membuat Uplaod File</h1>
        Nama : Asep Dwi Saputra <br>
        NIM : STI202102126 <br>
    </center>
    <br>
    <div style="text-align: center; background-color: #fff; padding: 40px; border-radius: 10px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
        <h1 style="color: #333;">Data Sudah Terupload</h1>
        <div style="margin-top: 20px; font-size: 18px; color: #666;"><b>dengan Identitas:</b></div>

        <ol>
            <?php foreach ($upload_data as $item => $value) : ?>
                <li><?php echo $item; ?>: <?php echo $value; ?></li>
            <?php endforeach; ?>
        </ol>
    </div>
</body>

</html>