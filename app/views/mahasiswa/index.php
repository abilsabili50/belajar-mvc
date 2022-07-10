<div class="container mt-3">

    <div class="row">
        <div class="col-6">
            <h3>Daftar Mahasiswa</h3>
            <?php foreach ($data["mhs"] as $mhs) : ?>
                <ul>
                    <li><b><?= $mhs["nama"]; ?></b></li>
                    <li><?= $mhs["npm"]; ?></li>
                    <li><?= $mhs["email"]; ?></li>
                    <li><?= $mhs["jurusan"]; ?></li>
                </ul>
            <?php endforeach; ?>
        </div>
    </div>

</div>