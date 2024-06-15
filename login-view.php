<!DOCTYPE html>
<html>

<head>
    <title>Database</title>
    <style>

body {
    display: flex;
    align-items: center;
    justify-content: center;
    font-family: sans-serif;
    line-height: 1.5;
    min-height: 100vh;
    background: #f3f3f3;
    flex-direction: column;
    margin: 0;
}

.main {
    background-color: #fff;
    border-radius: 15px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
    padding: 10px 20px;
    transition: transform 0.2s;
    width: 500px;
    text-align: center;
}

h1 {
    color: aquamarine;
}

label {
    display: block;
    width: 100%;
    margin-top: 10px;
    margin-bottom: 5px;
    text-align: left;
    color: #555;
    font-weight: bold;
}


input {
    display: block;
    width: 100%;
    margin-bottom: 15px;
    padding: 10px;
    box-sizing: border-box;
    border: 1px solid #ddd;
    border-radius: 5px;
}

button {
    padding: 15px;
    border-radius: 10px;
    margin-top: 15px;
    margin-bottom: 15px;
    border: none;
    color: white;
    cursor: pointer;
    background-color:aquamarine;
    width: 100%;
    font-size: 16px;
}

.wrap {
    display: flex;
    justify-content: center;
    align-items: center;
}

    </style>
    </head>

    <body>
        <div class="main">
            <h1>Admin Page de Login</h1>
            <form action="login-controller.php" method="POST">
                <label for="first">
                    Login
                </label>
                <input type="text" 
                    id="login"
                    name="email" 
                    placeholder="Entrer votre login">

                <label for="password">
                    Mot de passe:
                </label>
                <input type="password"
                    id="mdp" 
                    name="password" 
                    placeholder="Enter votre mot de passe">

                <div class="wrap">
                    <button type="submit">
                        Submit
                    </button>
            </form>
            </div>
                <?php if (isset($_SESSION['error'])): ?>
                    <div>
                        <?php echo $_SESSION['error']; ?>
                    </div>
                <?php endif; ?>
        </div>
    </body>

    </html>