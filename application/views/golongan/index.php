<div class="container">
    <div class="row mt-3">
        <div class="col-md-12">
            <h2>
                <div class="title mt-3">
                    DAFTAR GOLONGAN
                </div>
            </h2>
            <?php if (empty($golongan)) : ?>
                <div class="row">
                    <div class="col-md-14">
                        <div class="alert alert-danger" role="alert">
                            Data Golongan Tidak Ditemukan
                        </div>
                    </div>
                </div>
            <?php endif ?>
            <table class="table mt-4">
                <thead class="table">
                    <tr>
                        <th scope="col">ID Golongan</th>
                        <th scope="col">Nama Golongan</th>
                        <th scope="col">Status Pegawai</th>
                        <th scope="col">Gaji Pokok</th>
                        <th scope="col">Tnj Kinerja</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                    foreach ($golongan as $gol) :
                    ?>
                        <tr>
                            <td><?= $gol['id_golongan'] ?></td>
                            <td><?= $gol['nama_golongan'] ?></td>
                            <td><?= $gol['status_pegawai'] ?></td>
                            <td><?= $gol['gaji_pokok'] ?></td>
                            <td><?= $gol['tunjangan_kinerja'] ?></td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>