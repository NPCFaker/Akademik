<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h2 class="mt-2">Detail dosen</h2>
            <font size=5>
                <pre class="">Nama            : <?= $dosen['nm_dosen']; ?></pre>
                <pre class="">NIDN            : <?= $dosen['nidn']; ?></pre>
                <pre class="">Alamat          : <?= $dosen['alamat']; ?></pre>
                <pre class="">Jenis Kelamin   : <?= $dosen['jk']; ?></pre>
                <pre class="">Telepon         : <?= $dosen['telp_dosen']; ?></pre>

                <a href="" class="btn btn-warning">Edit</a>
                <a href="" class="btn btn-danger">Delete</a>
                <br>
                <a href="/mahasiswa" class="btn btn-primary">Kembali</a>
        </div>
    </div>
</div>

<?= $this->endsection(); ?>