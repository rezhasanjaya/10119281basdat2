<div class="container" style="margin-top: 30px">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header">
                    BUAT JADWAL LEMBUR
                </div>
                <div class="card-body">
                    <form action="" method="POST">

                        <div class="form-group mt mb-3">
                            <label for="id_lembur">ID Lembur</label>
                            <input type="text" name="id_lembur" id="id_lembur" class="form-control">
                            <div class="form-text text-danger"><?= form_error('id_lembur'); ?></div>
                        </div>

                        <div>
                            <label for="id_pegawai">Nama Pegawai</label>
                            <select class="form-select form-select-md" name="id_pegawai" id="id_pegawai">
                                <?php
                                foreach ($datapeg as $dpeg) : ?>
                                    <option value="<?= $dpeg->id_pegawai ?>"><?= $dpeg->nama_pegawai; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>

                        <div class="form-group mt-3">
                            <label for="tanggal_lembur">Tanggal Lembur</label>
                            <input type="date" name="tanggal_lembur" id="tanggal_lembur" class="form-control">
                            <div class="form-text text-danger"><?= form_error('tanggal_lembur'); ?></div>
                        </div>

                        <div class="form-group mt-3">
                            <label for="jumlah_jam">Jumlah Jam Lembur</label>
                            <input type="text" name="jumlah_jam" id="jumlah_jam" class="form-control">
                            <div class="form-text text-danger"><?= form_error('jumlah_jam'); ?></div>
                        </div>

                        <br>
                        <button type="submit" name="tambah" class="btn btn-outline-dark">Tambah Data</button>
                        <button type="reset" name="reset" class="btn btn-outline-dark">Reset</button>
                        <a href="<?php echo base_url() ?>pegawai/index" class="btn btn-md btn-outline-dark float-end">Kembali</a>
                    </form>
                </div>
            </div>
            <br>
        </div>
    </div>
</div>