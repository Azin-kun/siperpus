<?php
include '../aset/header.php';
?>
<div class="container">
    <div class="row mt-4">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">
                <h2>Tambah Data Buku</h2>
                </div>
                <div class="card-body">
                <form method="post" action="proses-bukutambah.php">
                        <div class="form-group">
                            <label for="judul">judul buku</label>
                            <input type="text" class="form-control" name="judul" id="judul" placeholder="Masukkan Judul Buku">
                        </div>
                        <div class="form-group">
                            <label for="penerbit">Penerbit</label>
                            <input type="text" class="form-control" name="penerbit" id="penerbit" placeholder="Masukkan Penerbit">
                        </div>
                        <div class="form-group">
                            <label for="pengarang">Pengarang</label>
                            <input type="text" class="form-control" name="pengarang" id="pengarang" placeholder="Masukkan Nama Pengarang">
                        </div>
                        <div class="form-group">
                            <label for="ringkasan">Ringkasan</label>
                            <input type="text" class="form-control" name="ringkasan" id="ringkasan" placeholder="Masukkan Ringkasan">
                        </div>
                        <div class="form-group">
                            <label for="cover">Cover</label>
                            <input type="text" class="form-control" name="cover" id="cover" placeholder="Masukkan Cover">
                        </div>
                        <div class="form-group">
                            <label for="stok">Stok</label>
                            <input type="text" class="form-control" name="stok" id="stok" placeholder="Masukkan Jumlah Stok">
                        </div>
                        <div class="form-group">
                            <label for="id_kategori">Kategori</label>
                            <input type="text" class="form-control" name="id_kategori" id="id_kategori" placeholder="Masukkan jenis kategori">
                        </div>
                        

                        <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

<?php
include '../aset/footer.php';
?>
