<html>

<body>

    <div class="container">
        <br>
        <h1>tulis</h1>
        <form method="post" action="<?= base_url('user/create') ?>">
            <div class="form-group">
                <label for="exampleInputEmail1">Nama</label>
                <input type="text" class="form-control" name="nama" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Jabatan</label>
                <input type="text" class="form-control" name="jabatan" aria-describedby="emailHelp" placeholder="Jabatan">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Jurusan</label>
                <input type="text" class="form-control" name="jurusan" aria-describedby="emailHelp" placeholder="Jurusan">
            </div>


            <button type="submit" class="btn btn-warning btn-block">Simpan</button>
        </form>
    </div>
</body>

</html>