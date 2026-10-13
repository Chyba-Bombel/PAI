<form action="./" method="POST">
    <label for="login">Login</label>
    <input type="text" id="login" name="login" placeholder="Podaj login"><br>

    <label for="email">Email</label>
    <input type="email" id="email" name="email" placeholder="Podaj e-mail"><br>

    <label for="password">Hasło</label>
    <input type="password" id="password" name="password" placeholder="Podaj hasło"><br>

    <label for="age">Wiek:</label>
    <input type="number" id="age" name="age" placeholder="Podaj wiek"><br>

    <label for="regulamin">Czy akceptujesz regulamin?</label><br>
    <input type="checkbox" name="accept" value="accept">Akceptuje regulamin.<br>

    <input type="submit" value="Zarejestruj sie">

</form>

<?php
    if(isset($_POST['login']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['age'])){
        if($_POST['login'].strlen() < 3){
            echo "Login musi mieć minimum 3 znaki";
        } 
        if(!str_contains($_POST['email'], "@")){
            echo "Mail nie zawiera @";
        }
    }
    
?>