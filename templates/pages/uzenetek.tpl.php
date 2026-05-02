<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['kuld'])) {
    $email = trim($_POST['e']);
    $msg = trim($_POST['m']);
    $nev = isset($_SESSION['login']) ? $_SESSION['login'] : "Vendég";

    if (strpos($email, '@') && !empty($msg)) {
        try {
        
            $dbh = new PDO('mysql:host=localhost;dbname=forgalomkorlatozas', 'root', '',
                          array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
            
            $sql = "INSERT INTO kapcsolat (nev, email, uzenet, datum) VALUES (?,?,?,NOW())";
            $sth = $dbh->prepare($sql);
            $sth->execute(array($nev, $email, $msg));
            
            echo "<div class='success-page'><h2>Köszönjük az üzenetet!</h2>";
            echo "<p><strong>Név:</strong> $nev</p><p><strong>Üzenet:</strong> $msg</p></div>";
            return;
        } catch (PDOException $e) { echo "Adatbázis hiba: " . $e->getMessage(); }
    }
}
?>

<h2>Kapcsolatfelvétel</h2>
<form id="contact_form" method="post" novalidate>
    <p>Küldő: <strong><?= isset($_SESSION['login']) ? $_SESSION['login'] : "Vendég" ?></strong></p>
    
    <label>E-mail cím:</label><br>
    <input type="text" name="e" id="e">
    <div id="js_err_e" style="color:red; display:none;">Érvénytelen e-mail cím!</div><br>
    
    <label>Üzenet:</label><br>
    <textarea name="m" id="m" rows="5"></textarea>
    <div id="js_err_m" style="color:red; display:none;">Az üzenet nem lehet üres!</div><br>
    
    <input type="submit" name="kuld" value="Üzenet küldése">
</form>

<script>

document.getElementById('contact_form').onsubmit = function(e) {
    let ok = true;
    const email = document.getElementById('e').value;
    const msg = document.getElementById('m').value;

    if (!email.includes('@')) {
        document.getElementById('js_err_e').style.display = 'block';
        ok = false;
    } else { document.getElementById('js_err_e').style.display = 'none'; }

    if (msg.trim() === "") {
        document.getElementById('js_err_m').style.display = 'block';
        ok = false;
    } else { document.getElementById('js_err_m').style.display = 'none'; }

    if (!ok) e.preventDefault(); 
};
</script>