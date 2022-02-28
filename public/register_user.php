<?php

echo '
<form action="add_user.php">
    <div>
        <h1>Register user</h1>
        <p>Please fill in this form to create a user account.</p>
        <hr>

        <label for="login"><b>Login</b></label>
        <input type="text" placeholder="Enter login" name="login" id="login" required>

        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="password" id="password" required>

        <hr>
        <button type="submit">Register</button>
    </div>
</form>';
