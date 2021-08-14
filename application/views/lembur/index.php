<div class="container">
    <div class="row mt-3">
        <div class="col-md-12">
            <h2>
                <div class="title mt-3">
                    DAFTAR LEMBUR
                </div>
            </h2>
            <?php if (empty($lembur)) : ?>
                <div class="row">
                    <div class="col-md-14">
                        <div class="alert alert-danger" role="alert">
                            Data Lembur Tidak Ditemukan
                        </div>
                    </div>
                </div>
            <?php endif ?>
            <table class="table mt-4">
                <thead class="table">
                    <tr>
                        <th scope="col">ID Lembur</th>
                        <th scope="col">ID Pegawai</th>
                        <th scope="col">Tanggal Lembur</th>
                        <th scope="col">Jumlah Jam Lembur</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                    foreach ($lembur as $lem) :
                    ?>
                        <tr>
                            <td><?= $lem['id_lembur'] ?></td>
                            <td><?= $lem['id_pegawai'] ?></td>
                            <td><?= $lem['tanggal_lembur'] ?></td>
                            <td><?= $lem['jumlah_jam'] ?></td>
                            <td>
                                <a href="<?= base_url(); ?>lembur/hapus/<?= $lem['id_lembur']; ?>" onclick="return confirm('Yakin?');"><span class="badge bg-danger text-dark">Hapus</span></a>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col">
            <a href="<?= base_url('') ?>lembur/tambah" class="btn btn-outline-dark">Buat Jadwal Lembur</a>
        </div>
    </div>
</div>