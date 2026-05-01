<a href="uj_megnevezes" class="createbtn"><button type="button" class="btn btn-primary">Új megnevezés</button></a>
<table class="table table-bordered table-hover mt-3">
    <thead>
    <tr>
        <th>id</th>
        <th>Név</th>
        <th>Műveletek</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach($lista as $data): ?>
        <tr>
            <td><?php echo $data['id']; ?></td>
            <td><?php echo $data['nev']; ?></td>
            <td>
                <a href="edit?id=<?php echo $data['id']; ?>" class="btn btn-primary">Edit</a>
                <a href="delete?id=<?php echo $data['id']; ?>" class="btn btn-danger">Delete</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>