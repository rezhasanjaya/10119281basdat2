<div class="container">
    <div class="row mt-3">
        <div class="col-md-12">
            <h2>
                <div class="title mt-3">
                    PENGGAJIAN
                </div>
            </h2>
            <?php if (empty($penggajian)) : ?>
                <div class="row">
                    <div class="col-md-14">
                        <div class="alert alert-danger" role="alert">
                            Data Penggajian Tidak Ditemukan
                        </div>
                    </div>
                </div>
            <?php endif ?>
            <table class="table mt-4">
                <thead class="table">
                    <tr>
                        <th scope="col">ID Penggajian</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">ID Pegawai</th>
                        <th scope="col">Jumlah Gaji</th>
                        <th scope="col">Upah Lembur</th>
                        <th scope="col">Potongan Cuti</th>
                        <th scope="col">Total Gaji</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                    foreach ($penggajian as $gj) :
                    ?>
                        <tr>
                            <td><?= $gj['id_penggajian'] ?></td>
                            <td><?= $gj['tanggal'] ?></td>
                            <td><?= $gj['id_pegawai'] ?></td>
                            <td><?= $gj['jumlah_gaji'] ?></td>
                            <td><?= $gj['upah_lembur'] ?></td>
                            <td><?= $gj['potongan'] ?></td>
                            <td><?= $gj['total_gaji'] ?></td>
                            <td><a href="<?= base_url(); ?>penggajian/ubah/<?= $gj['id_penggajian']; ?>"><span class="badge bg-primary text-dark">Ubah</span></a>
                                <a href="<?= base_url(); ?>penggajian/hapus/<?= $gj['id_penggajian']; ?>" onclick="return confirm('Yakin?');"><span class="badge bg-danger text-dark">Hapus</span></a>
                            <td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col">
            <a href="<?= base_url('') ?>penggajian/tambah" class="btn btn-outline-dark">Penggajian</a>
        </div>
    </div>
</div>