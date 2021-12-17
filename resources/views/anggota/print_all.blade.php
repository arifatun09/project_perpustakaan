<html>
    <head>
        <title>Print</title>
    </head>
    <body>
    <center>
      <h1>Data Semua Anggota</h1>
    </center>
    <div class="card-body table-responsive p-0" style="height: 500px;">
      <table class="table table-head-fixed text-nowrap" border="1">
        <thead>
          <tr>
            <th>ID Anggota</th>
            <th>Nama</th>
            <th>Foto</th>
            <th>Jenis Kelamin</th>
            <th>Alamat</th>
          </tr>
        </thead>
        <tbody>
          @foreach($anggota as $a)
          <tr>
            <td>{{ $a->id }}</td>
            <td>{{ $a->nama }}</td>
            <td>
              <img width="150px" src="{{public_path('storage/'.$a->photo)}}" alt="image" >
            </td>
            <td>{{ $a->jenis_kelamin }}</td>
            <td>{{ $a->alamat }}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </body>
</html>