<div class="container" style="margin-top: 30px">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header">
                    TAMBAH DATA PEGAWAI
                </div>
                <div class="card-body">
                    <form action="" method="POST">

                        <div class="form-group mt">
                            <label for="id_pegawai">ID Pegawai</label>
                            <input type="text" name="id_pegawai" id="id_pegawai" class="form-control">
                            <div class="form-text text-danger"><?= form_error('id_pegawai'); ?></div>
                        </div>

                        <div class="form-group mt">
                            <label for="nama_pegawai">Nama Pegawai</label>
                            <input type="text" name="nama_pegawai" id="nama_pegawai" class="form-control">
                            <div class="form-text text-danger"><?= form_error('nama_pegawai'); ?></div>
                        </div>

                        <div>
                            <div class="form-group mt-3">
                                <label>Jenis Kelamin</label>
                                <div class="form-check mt-1">
                                    <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin" value="Pria">
                                    <label class="form-check-label" for="jenis_kelamin">
                                        Pria
                                    </label>
                                </div>
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin" value="Wanita">
                                    <label class="form-check-label" for="jenis_kelamin">
                                        Wanita
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div>
                            <label for="id_golongan">Golongan</label>
                            <select class="form-select form-select-md" name="id_golongan" id="id_golongan">
                                <option>Pilih Golongan</option>
                                <?php
                                $blank = " - ";
                                foreach ($datagol as $dgol) : ?>
                                    <option value="<?= $dgol->id_golongan ?>"><?= $dgol->nama_golongan, $blank, $dgol->status_pegawai; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>


                        <div class="form-group mt-3">
                            <label for="tanggal_lahir">Tempat Lahir</label>
                            <input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control">
                            <div class="form-text text-danger"><?= form_error('tanggal_lahir'); ?></div>
                        </div>

                        <div class="form-group mt-3">
                            <label for="tempat_lahir">Tanggal Lahir</label>
                            <input type="text" name="tempat_lahir" id="tempat_lahir" class="form-control">
                            <div class="form-text text-danger"><?= form_error('tempat_lahir'); ?></div>
                        </div>

                        <div class="form-group mt-3">
                            <label for="no_telepon">Nomor Telepon</label>
                            <input type="text" name="no_telepon" id="no_telepon" class="form-control">
                            <div class="form-text text-danger"><?= form_error('no_telepon'); ?></div>
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