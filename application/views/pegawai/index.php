<div class="container">
    <div class="row mt-3">
        <div class="col-md-12">
            <h2>
                <div class="title mt-3">
                    DAFTAR PEGAWAI
                </div>
            </h2>
            <?php if (empty($pegawai)) : ?>
                <div class="row">
                    <div class="col-md-14">
                        <div class="alert alert-danger" role="alert">
                            Data Pegawai Tidak Ditemukan
                        </div>
                    </div>
                </div>
            <?php endif ?>

            <?php if ($this->session->flashdata('flash')) : ?>
                <div class="row mt-3">
                    <div class="col-md-5">
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            Data Pegawai <strong>Berhasil</strong> <?= $this->session->flashdata('flash'); ?>.
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                            </button>
                        </div>
                    </div>
                </div>
            <?php endif; ?>

            <div class="row mt-3">
                <div class="col-md-5">
                    <form action="" method="post">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Cari Pegawai" name="keyword">
                            <div class="input-group-append">
                                <button class="btn btn-outline-dark" type="submit">Cari</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <table class="table">
                <thead class="table">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">ID Pegawai</th>
                        <th scope="col">Nama Pegawai</th>
                        <th scope="col">Jenis Kelamin</th>
                        <th scope="col">Tempat Lahir</th>
                        <th scope="col">Tanggal Lahir</th>
                        <th scope="col">No Telepon</th>
                        <th scope="col">ID Golongan</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i = 1;
                    foreach ($pegawai as $peg) :
                    ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td><?= $peg['id_pegawai'] ?></td>
                            <td><?= $peg['nama_pegawai'] ?></td>
                            <td><?= $peg['jenis_kelamin'] ?></td>
                            <td><?= $peg['tempat_lahir'] ?></td>
                            <td><?= $peg['tanggal_lahir'] ?></td>
                            <td><?= $peg['no_telepon'] ?></td>
                            <td><?= $peg['id_golongan'] ?></td>
                            <td><a href="<?= base_url(); ?>pegawai/ubah/<?= $peg['id_pegawai']; ?>"><span class="badge bg-primary text-dark">Ubah</span></a>
                                <a href="<?= base_url(); ?>pegawai/hapus/<?= $peg['id_pegawai']; ?>" onclick="return confirm('Yakin?');"><span class="badge bg-danger text-dark float-end">Hapus</span></a>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col">
            <a href="<?= base_url('') ?>pegawai/tambah" class="btn btn-outline-dark">Tambah Pegawai</a>
            <a href="<?= base_url(); ?>pegawai/tampil_laki" class="btn btn-outline-dark">Tampilkan Pegawai Pria</a>
            <a href="<?= base_url(); ?>pegawai/tampil_wanita" class="btn btn-outline-dark">Tampilkan Pegawai Wanita</a>
            <a href="<?= base_url(); ?>pegawai" class="btn btn-outline-dark float-end">Tampilkan Semua</a>

        </div>
    </div>
</div>