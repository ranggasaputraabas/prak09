<div id="page-content-wrapper">
    <div class="container mt-3">
        <h2>detail pasien</h2>
        <table class="table">
            <tr>
                <th>kode</th>
                <th>nama</th>
                <th>gender</th>
                <th>tempat lahir</th>
                <th>tanggal lahir</th>
            </tr>
            <td><?php echo $patien->kode; ?></td>
            <td><?php echo $patien->nama ?></td>
            <td><?php echo $patien->gender ?></td>
            <td><?php echo $patien->tmp_lahir ?></td>
            <td><?php echo $patien->tgl_lahir ?></td>
        </table>
    </div>
</div>