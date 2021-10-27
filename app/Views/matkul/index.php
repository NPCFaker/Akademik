<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h2 class="mt-2">Daftar Mata Kuliah</h2>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">NO</th>
                        <th scope="col">Kode Mata Kuliah</th>
                        <th scope="col">Nama Mata Kuliah</th>
                        <th scope="col">Semester</th>
                        <th scope="col">SKS</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>

                    <?php $i = 1;
                    foreach ($matkul as $mk) :
                    ?>
                        <tr>
                            <th scope="row"><?= $i++ ?></th>
                            <td><?= $mk['kode_mk'] ?></td>
                            <td><?= $mk['nm_mk'] ?></td>
                            <td><?= $mk['sem'] ?></td>
                            <td><?= $mk['sks'] ?></td>
                            <td>
                                <a href="/matkul/<?= $mk['kode_mk']; ?>" class="btn btn-success">Detail</a>

                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?= $this->endsection(); ?>