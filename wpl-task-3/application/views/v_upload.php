<html>

<head>
    <title>Tugas Upload</title>
</head>

<body>
    <center>
        <h1>Membuat Uplaod File</h1>
    </center>
    <?php echo $error; ?>
    <form action="<?php echo base_url('wpl-task-3/upload/aksi_upload'); ?>" method="post" enctype="multipart/form-data">
        <div style="text-align: center; background-color: #fff; padding: 40px; border-radius: 10px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
            <input type="file" name="berkas">
            <br>
            <br>
            <input type="submit" value="upload">
        </div>

    </form>
</body>

</html>