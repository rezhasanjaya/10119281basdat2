<div class="container" style="margin-top: 30px">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header">
                    UBAH DATA PEGAWAI
                </div>
                <div class="card-body">
                    <form action="" method="POST">
                        <input type="hidden" name="id_pegawai" value="<?php echo $pegawai['id_pegawai']; ?>">
                        <div class="form-group mt">
                            <fieldset disabled>
                                <label for="id_pegawai">ID Pegawai</label>
                                <input type="text" name="id_pegawai" id="id_pegawai" class="form-control" value="<?= $pegawai['id_pegawai']; ?>">
                                <div id="helpblock" class="form-text">
                                    Tidak Dapat Mengubah ID Pegawai
                                </div>
                                <div class="form-text text-danger"><?= form_error('id_pegawai'); ?></div>
                        </div>

                        <div class="form-group mt">
                            <label for="nama_pegawai">Nama Pegawai</label>
                            <input type="text" name="nama_pegawai" id="nama_pegawai" class="form-control" value="<?= $pegawai['nama_pegawai']; ?>">
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
                                <?php
                                $blank = " - ";
                                foreach ($datagol as $dgol) : ?>
                                    <?php if ($datagol->id_golongan == $pegawai['id_golongan']) : ?>
                                        <option value="<?= $dgol->id_golongan; ?>" selected><?= $dgol->nama_golongan, $blank, $dgol->status_pegawai; ?></option>
                                    <?php else : ?>
                                        <option value="<?= $dgol->id_golongan ?>"><?= $dgol->nama_golongan, $blank, $dgol->status_pegawai; ?></option>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </select>
                        </div>

                        <div class="form-group mt-3">
                            <label for="tanggal_lahir">Tempat Lahir</label>
                            <input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control" value="<?= $pegawai['tanggal_lahir']; ?>">
                            <div class="form-text text-danger"><?= form_error('tanggal_lahir'); ?></div>
                        </div>

                        <div class="form-group mt-3">
                            <label for="tempat_lahir">Tempat Lahir</label>
                            <input type="text" name="tempat_lahir" id="tempat_lahir" class="form-control" value="<?= $pegawai['tempat_lahir']; ?>">
                            <div class="form-text text-danger"><?= form_error('tempat_lahir'); ?></div>
                        </div>

                        <div class="form-group mt-3">
                            <label for="no_telepon">Nomor Telepon</label>
                            <input type="text" name="no_telepon" id="no_telepon" class="form-control" value="<?= $pegawai['no_telepon']; ?>">
                            <div class="form-text text-danger"><?= form_error('no_telp'); ?></div>
                        </div>

                        <br>
                        <button type="submit" name="ubah" class="btn btn-outline-dark">Simpan Perubahan</button>
                        <a href="<?php echo base_url() ?>pegawai/index" class="btn btn-md btn-outline-dark float-end">Kembali</a>
                    </form>
                </div>
            </div>
            <br>
        </div>
    </div>
</div>