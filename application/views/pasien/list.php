<div id="page-content-wrapper">
    <div class="container mt-3">
        <h2>list pasien</h2>
        <table class="table">
            <tr>
                <th>kode</th>
                <th>nama</th>
                <th>gender</th>
                <th>tempat lahir</th>
                <th>tanggal lahir</th>
                <th>email</th>
                <th>action</th>
            </tr>
            <?php foreach($patiens as $patien) : ?>
            <tr>
                <td><?php echo $patien->kode ?></td>
                <td><?php echo $patien->nama ?></td>
                <td><?php echo $patien->gender ?></td>
                <td><?php echo $patien->tmp_lahir ?></td>
                <td><?php echo $patien->tgl_lahir ?></td>
                <td><?php echo $patien->email ?></td>
                <td>
                    <a href="<?php echo "detail/$patien->id" ?> ">
                        Detail pasien
                    </a>
                </td>

            </tr>
            <?php endforeach ?>
        </table>
    </div>
</div>