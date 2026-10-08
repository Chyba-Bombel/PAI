<form action="./" method="POST">
    <label for="name">Imię:</label>
    <input type="text" id="name" name="name" placeholder="Podaj imię"><br>

    <label for="age">Wiek:</label>
    <input type="number" id="age" name="age" placeholder="Podaj wiek"><br>

    <input type="submit">
</form>

<?php
if (isset($_POST['name']) && isset($_POST['age'])) {
    echo $_POST['name']." ";
    echo $_POST['age']." ";
}
?>