<body>
<style>
    form{
        display: flex;
        flex-direction: column;
        align-items: center;
    }
    form > input{
        margin-bottom: 10px;
    }
</style>


    <form action="register.php" method='POST'>
        <h2>Registrati</h2>

        <label for='nome'>Nome</label>
        <input type='text' name='nome' id='nome' required>

        <label for='cognome'>Cognome</label>
        <input type='cognome' name='cognome' id='cognome' required>

        <label for='email'>Email</label>
        <input type='email' name='email' id='email' required>

        <label for='password'>Password</label>
        <input type='password' name='password' id='password' required>

    

        <input type='submit' value='invia'>

    </form> 


</body>