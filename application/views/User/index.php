<html>

<body>
    <div class="container">
        <br>
        <h1>PKKM</h1>
        <a href="<?php echo base_url('/user/create') ?>" class="btn btn-warning">Tambah</a>
        <table class="table" border="1">
            <thead>
                <br>
                <br>
                <br>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Jabatan</th>
                    <th scope="col">Jurusan</th>
                    <th scope="col">pilih</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($daftar_list as $item) { ?>
                    <tr>
                        <th scope="row"><?= $no++ ?></th>
                        <td><?= $item->nama ?></td>
                        <td><?= $item->jabatan ?></td>
                        <td><?= $item->Jurusan ?></td>
                        <td>
                            <a href="<?php echo base_url('/user/update/' . $item->id) ?>" class="btn btn-warning">Ubah</a>
                            <a href="<?php echo base_url('/user/delete/' . $item->id) ?>" class="btn btn-danger">Delete</a>
                        </td>

                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>


</body>

</html>