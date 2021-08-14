<div class="container" style="margin-top: 30px">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header">
                    PENGGAJIAN PEGAWAI
                </div>
                <div class="card-body">
                    <form action="" method="POST">
                        <input type="hidden" name="id_penggajian" value="<?php echo $penggajian['id_penggajian']; ?>">
                        <div class="form-group">
                            <fieldset disabled>
                                <label for="id_penggajian">ID Penggajian</label>
                                <input type="text" name="id_penggajian" id="id_penggajian" class="form-control" value="<?= $penggajian['id_penggajian']; ?>">
                                <div id="helpblock" class="form-text">
                                    Tidak Dapat Mengubah ID Penggajian
                                </div>
                                <div class="form-text text-danger"><?= form_error('id_penggajian'); ?></div>

                        </div>

                        <div class="form-group mt-2 mb-3">
                            <label for="tanggal">Tanggal</label>
                            <input type="date" name="tanggal" id="tanggal" class="form-control" value="<?= $penggajian['tanggal']; ?>">
                            <div class="form-text text-danger"><?= form_error('tanggal'); ?></div>
                        </div>

                        <div>
                            <label for="id_pegawai">Nama Pegawai</label>
                            <select class="form-select form-select-md mb-3" name="id_pegawai" id="id_pegawai">
                                <?php
                                foreach ($datapeg as $dpeg) : ?>
                                    <?php if ($datapeg->id_pegawai == $penggajian['id_pegawai']) : ?>
                                        <option value="<?= $dpeg->id_pegawai ?>" selected><?= $dpeg->nama_pegawai; ?></option>
                                    <?php else : ?>
                                        <option value="<?= $dpeg->id_pegawai ?>"><?= $dpeg->nama_pegawai; ?></option>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </select>
                        </div>

                        <div class="form-group mt-3">
                            <label for="jumlah_gaji">Jumlah Gaji</label>
                            <input type="text" name="jumlah_gaji" id="jumlah_gaji" class="form-control" value="<?= $penggajian['jumlah_gaji']; ?>">
                            <div class="form-text text-danger"><?= form_error('jumlah_gaji'); ?></div>
                        </div>

                        <div class="form-group mt-3">
                            <label for="upah_lembur">Upah Lembur</label>
                            <input type="text" name="upah_lembur" id="upah_lembur" class="form-control" value="<?= $penggajian['upah_lembur']; ?>">
                            <div class="form-text text-danger"><?= form_error('upah_lembur'); ?></div>
                        </div>

                        <div class="form-group mt-3">
                            <label for="potongan">Potongan Cuti</label>
                            <input type="text" name="potongan" id="potongan" class="form-control" value="<?= $penggajian['potongan']; ?>">
                            <div class="form-text text-danger"><?= form_error('potongan'); ?></div>
                        </div>

                        <div class="form-group mt-3">
                            <label for="total_gaji">Total Gaji</label>
                            <input type="text" name="total_gaji" id="total_gaji" class="form-control" value="<?= $penggajian['total_gaji']; ?>">
                            <div class="form-text text-danger"><?= form_error('total_gaji'); ?></div>
                        </div>
                        <br>
                        <button type="submit" name="tambah" class="btn btn-outline-dark">Ubah Slip Gaji</button>
                        <button type="reset" name="reset" class="btn btn-outline-dark">Reset</button>
                        <a href="<?php echo base_url() ?>penggajian/index" class="btn btn-md btn-outline-dark float-end">Kembali</a>
                    </form>
                </div>
            </div>
            <br>
        </div>
    </div>
</div>