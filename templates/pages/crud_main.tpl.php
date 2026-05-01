<h2>Korlátozásnevek szerkesztése</h2>
<a href="uj_megnevezes" class="btn btn-primary mb-3">Új megnevezés</a>
<table class="table table-bordered table-striped table-hover bg-white">
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
                <form action="./edit" method="POST" class="d-inline">
                    <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
                    <button type="submit" class="btn btn-primary">Módosítás</button>
                </form>

                <form action="./delete" method="POST" class="d-inline">
                    <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
                    <button type="submit" class="btn btn-danger">Törlés</button>
                </form>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>