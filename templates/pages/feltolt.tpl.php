<style type="text/css">
    .upload-form {
        background-color: white;
        padding: 25px;
        border-radius: 8px;
        box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        max-width: 500px;
        margin: 20px auto;
    }
    .upload-form label {
        display: block;
        margin-bottom: 15px;
        font-weight: bold;
        color: #2c3e50;
    }
    .upload-form input[type="file"] {
        display: block;
        margin-top: 5px;
        width: 100%;
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }
    .upload-btn {
        background-color: #3498db;
        color: white;
        border: none;
        padding: 12px 20px;
        border-radius: 5px;
        cursor: pointer;
        font-weight: bold;
        width: 100%;
        margin-top: 10px;
        transition: background-color 0.3s;
    }
    .upload-btn:hover {
        background-color: #2980b9;
    }
    .msg-list {
        list-style-type: none;
        padding: 0;
    }
    .msg-list li {
        padding: 10px;
        margin-bottom: 10px;
        border-radius: 5px;
        background-color: #e8f8f5;
        color: #16a085;
        border-left: 5px solid #1abc9c;
    }
</style>

<div class="upload-form">
    <h2>Feltöltés a galériába</h2>

    <?php
    if (!empty($uzenet)) {
        echo '<ul class="msg-list">';
        foreach($uzenet as $u) {
            echo "<li>$u</li>";
        }
        echo '</ul>';
    }
    ?>

    <form action="" method="post" enctype="multipart/form-data">
        <label>Első kép (kötelező):
            <input type="file" name="elso" required>
        </label>
        <label>Második kép (opcionális):
            <input type="file" name="masodik">
        </label>
        <label>Harmadik kép (opcionális):
            <input type="file" name="harmadik">
        </label>

        <input type="submit" name="kuld" value="Fájlok feltöltése" class="upload-btn">
    </form>
</div>