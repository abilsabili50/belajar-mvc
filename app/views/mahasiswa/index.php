<div class="container mt-3">

    <div class="row">
        <div class="col-6">
            <?php Flasher::flash(); ?>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-6">
            <button type="button" class="btn btn-primary tampilModalTambah" data-bs-toggle="modal" data-bs-target="#modalForm">
                Tambah Data Mahasiswa
            </button>
        </div>
    </div>

    <div class="row mb-2">
        <div class="col-6">
            <form action="<?= BASEURL; ?>/mahasiswa/cari" method="post">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Cari Mahasiswa" name="keyword" id="keyword" autocomplete="off">
                    <button class="btn btn-outline-primary" type="submit" id="cari">Cari</button>
                </div>
            </form>
        </div>
    </div>

    <div class="row">
        <div class="col-6">

            <h3>Daftar Mahasiswa</h3>
            <ul class="list-group">
                <?php foreach ($data["mhs"] as $mhs) : ?>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <?= $mhs["nama"]; ?>
                        <section>
                            <a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs["id"]; ?>" class="badge text-bg-primary text-decoration-none">detail</a>
                            <a href="<?= BASEURL; ?>/mahasiswa/ubah/<?= $mhs["id"]; ?>" data-id="<?= $mhs["id"]; ?>" class="badge text-bg-warning text-decoration-none tampilModalUbah" data-bs-toggle="modal" data-bs-target="#modalForm"><i class="bi bi-pencil-square"></i></a>
                            <a href="<?= BASEURL; ?>/mahasiswa/hapus/<?= $mhs["id"]; ?>" class="badge text-bg-danger text-decoration-none" onclick="return confirm('Yakin?')"><i class="bi bi-trash"></i></a>
                        </section>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>

</div>

<!-- Modal -->
<div class="modal fade" id="modalForm" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="judulModal">Tambah Data</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form action="<?= BASEURL; ?>/mahasiswa/tambah" method="post">
                    <input type="hidden" name="id" id="id">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Elon Musk">
                    </div>
                    <div class="mb-3">
                        <label for="npm" class="form-label">NPM</label>
                        <input type="number" class="form-control" id="npm" name="npm" placeholder="20081010101">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="elon.musk@tesla.co.id">
                    </div>
                    <div class="mb-3">
                        <label for="jurusan" class="form-label">Jurusan</label>
                        <select id="jurusan" name="jurusan" class="form-select" aria-label="Default select example">
                            <option selected disabled value="">Pilih Jurusan</option>
                            <option value="Teknik Informatika">Teknik Informatika</option>
                            <option value="Sistem Informasi">Sistem Informasi</option>
                            <option value="Sains Data">Sains Data</option>
                        </select>
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary">Tambah</button>
                </form>
            </div>
        </div>
    </div>
</div>