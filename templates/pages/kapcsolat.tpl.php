<style>
    .contact-form-container {
        background-color: white; padding: 25px; border-radius: 8px;
        box-shadow: 0 4px 6px rgba(0,0,0,0.1); max-width: 600px; margin: 20px auto;
    }
    .contact-form-container label { font-weight: bold; color: #2c3e50; }
    .contact-form-container input[type="text"], .contact-form-container textarea {
        width: 100%; padding: 10px; margin: 8px 0 15px 0; border: 1px solid #ccc; border-radius: 5px;
    }
    .contact-form-container input[type="submit"] {
        background-color: #3498db; color: white; border: none; padding: 12px 20px;
        border-radius: 5px; cursor: pointer; font-weight: bold; width: 100%;
    }
    .contact-form-container input[type="submit"]:hover { background-color: #2980b9; }
    .success-msg { background-color: #e8f8f5; color: #16a085; padding: 15px; border-left: 5px solid #1abc9c; border-radius: 5px; margin-bottom: 20px; }
</style>

<div class="contact-form-container">
    <h2>Kapcsolatfelvétel</h2>

    <?php if ($eredmeny === "sikeres"): ?>
        <div class="success-msg">
            <h3>Köszönjük az üzenetet!</h3>
            <p><strong>Név:</strong> <?php echo htmlspecialchars($kuldott_nev); ?></p>
            <p><strong>Üzenet:</strong> <?php echo nl2br(htmlspecialchars($kuldott_msg)); ?></p>
        </div>
        <p><a href="?oldal=kapcsolat">Új üzenet küldése</a></p>
    <?php else: ?>

    <?php if (!empty($eredmeny)): ?>
        <p style="color: red;"><?php echo $eredmeny; ?></p>
    <?php endif; ?>

        <form id="contact_form" action="" method="post" novalidate>
            <p>Küldő: <strong><?= isset($_SESSION['login']) ? htmlspecialchars($_SESSION['login']) : "Vendég" ?></strong></p>

            <label>E-mail cím:</label>
            <input type="text" name="e" id="e">
            <div id="js_err_e" style="color:red; display:none; margin-bottom: 10px;">Érvénytelen e-mail cím!</div>

            <label>Üzenet:</label>
            <textarea name="m" id="m" rows="5"></textarea>
            <div id="js_err_m" style="color:red; display:none; margin-bottom: 10px;">Az üzenet nem lehet üres!</div>

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
    <?php endif; ?>
</div>