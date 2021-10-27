<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h2 class="mt-2">Daftar Mahasiswa</h2>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">NO</th>
                        <th scope="col">NIM</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Jenis Kelamin</th>
                        <th scope="col">Tanggal Lahir</th>
                        <th scope="col">Telp</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>

                    <?php $i = 1;
                    foreach ($mhs as $m) :
                    ?>
                        <tr>
                            <th scope="row"><?= $i++ ?></th>
                            <td><?= $m['nim'] ?></td>
                            <td><?= $m['nama'] ?></td>
                            <td><?= $m['alamat'] ?></td>
                            <td><?= $m['jk'] ?></td>
                            <td><?= $m['tgl_lahir'] ?></td>
                            <td><?= $m['telp'] ?></td>
                            <td>
                                <a href="/mahasiswa/<?= $m['nim']; ?>" class="btn btn-success">Detail</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?= $this->endsection(); ?>