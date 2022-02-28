<?php

echo '
<form action="add_admin.php">
    <div>
        <h1>Register admin</h1>
        <p>Please fill in this form to create an admin account.</p>
        <hr>

        <label for="login"><b>Login</b></label>
        <input type="text" placeholder="Enter login" name="login" id="login" required>

        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="password" id="password" required>
        
        <input type="hidden" name="is_admin" id="is_admin" value="1" required>

        <hr>
        <button type="submit">Register</button>
    </div>
</form>';
