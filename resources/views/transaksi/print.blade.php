<html>
    <head>
        <title>Print Transaksi</title>
        <style>
            h2 {
                text-align: center;
            }
        </style>
    </head>
    <body>
        <h2>Identitas Peminjam</h2>
        <table class="table table-responsive">
            <tr><th>Nama</th><td>: {{ $transaksi[0]->nama }}</td></tr>
            <tr><th>Jenis Kelamin</th><td>: {{ $transaksi[0]->jenis_kelamin }}</td></tr>
            <tr><th>Alamat</th><td>: {{ $transaksi[0]->alamat }}</td></tr>
        </table>
        <h2>Buku yang dipinjam</h2>
        <table class="table table-responsive">
            <tr><th>Judul</th><td>: {{ $transaksi[0]->judul }}</td></tr>
            <tr><th>Kategori</th><td>: {{ $transaksi[0]->kategori }}</td></tr>
            <tr><th>Pengarang</th><td>: {{ $transaksi[0]->pengarang }}<td></td></tr>
            <tr><th>Penerbit</th><td>: {{ $transaksi[0]->penerbit }}</td></tr>
        </table>
        <h2>Tanggal Peminjaman dan Pengembalian</h2>
        <table class="table table-responsive">
            <tr><th>Tanggal Peminjaman</th><td>: {{ $transaksi[0]->tgl_pinjam }}</td></tr>
            <tr><th>Tanggal Pengembalian</th><td>: {{ $transaksi[0]->tgl_kembali }}</td></tr>
            <tr><th>Status</th><td>: {{ $transaksi[0]->status }}</td></tr>
        </table>
    </body>
</html>