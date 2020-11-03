<table class="table table-sm table-bordered">
    <thead>
        <tr>
            <th>Level</th>
            <th>Majors</th>
            <th>Universitas</th>
            <th>Graduation year</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($dt_edu as $edu) { ?>
            <tr>
                <td>
                    <input type="text" name="jenjang[]" value="<?php echo $edu->jenjang ?>" class="form-control" readonly>
                </td>
                <td>
                    <input type="text" name="jurusan[]" value="<?php echo $edu->jurusan ?>" class="form-control" readonly>
                </td>
                <td>
                    <input type="text" name="univ[]" value="<?php echo $edu->univ ?>" class="form-control" readonly>
                </td>
                <td>
                    <input type="text" name="thn_lulus[]" value="<?php echo $edu->thn_lulus ?>" class="form-control" readonly>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>