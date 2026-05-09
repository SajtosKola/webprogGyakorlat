<style>
    .messages-container {
        background-color: white; padding: 25px; border-radius: 8px;
        box-shadow: 0 4px 6px rgba(0,0,0,0.1); margin: 20px auto;
    }
    .uzenet-tablazat {
        width: 100%; border-collapse: collapse; margin-top: 15px;
    }
    .uzenet-tablazat th {
        background-color: #2c3e50; color: white; padding: 12px; text-align: left;
    }
    .uzenet-tablazat td {
        padding: 12px; border-bottom: 1px solid #ddd;
    }
    .uzenet-tablazat tr:hover { background-color: #f1f1f1; }
</style>

<div class="messages-container">
    <?php if (!isset($_SESSION['login'])): ?>
        <div class="error-msg" style="color: #e74c3c; font-weight: bold; text-align: center; padding: 20px;">
            <h3>Ehhez az oldalhoz bejelentkezés szükséges!</h3>
        </div>
    <?php else: ?>
        <h2>Beérkezett üzenetek</h2>

        <?php if (!empty($db_hiba)): ?>
            <p style="color: red;"><?php echo $db_hiba; ?></p>
        <?php endif; ?>

        <div class="table-res" style="overflow-x: auto;">
            <table class="uzenet-tablazat">
                <thead>
                <tr>
                    <th>Küldő neve</th>
                    <th>E-mail</th>
                    <th>Üzenet</th>
                    <th>Dátum</th>
                </tr>
                </thead>
                <tbody>
                <?php if (empty($beerk_uzenetek)): ?>
                    <tr><td colspan="4" style="text-align:center;">Nincsenek még beérkezett üzenetek.</td></tr>
                <?php else: ?>
                    <?php foreach($beerk_uzenetek as $row): ?>
                        <tr>
                            <td><?= htmlspecialchars($row['nev']) ?></td>
                            <td><?= htmlspecialchars($row['email']) ?></td>
                            <td><?= nl2br(htmlspecialchars($row['uzenet'])) ?></td>
                            <td><?= $row['datum'] ?></td>
                        </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
                </tbody>
            </table>
        </div>
    <?php endif; ?>
</div>