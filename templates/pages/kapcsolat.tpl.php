<?php
// Csak bejelentkezett felhasználó láthatja[cite: 4]
if (!isset($_SESSION['login'])) {
    echo "<h3>Ehhez az oldalhoz bejelentkezés szükséges!</h3>";
} else {
    try {
        $dbh = new PDO('mysql:host=localhost;dbname=forgalomkorlatozas', 'root', '');
        // Fordított időrend (legfrissebb elől)[cite: 4]
        $sql = "SELECT nev, email, uzenet, datum FROM kapcsolat ORDER BY datum DESC";
        $sth = $dbh->query($sql);
?>
        <h2>Beérkezett üzenetek</h2>
        <div class="table-res">
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
                    <?php while($row = $sth->fetch(PDO::FETCH_ASSOC)): ?>
                        <tr>
                            <td><?= htmlspecialchars($row['nev']) ?></td>
                            <td><?= htmlspecialchars($row['email']) ?></td>
                            <td><?= nl2br(htmlspecialchars($row['uzenet'])) ?></td>
                            <td><?= $row['datum'] ?></td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
<?php
    } catch (PDOException $e) { echo "Hiba: " . $e->getMessage(); }
}
?>