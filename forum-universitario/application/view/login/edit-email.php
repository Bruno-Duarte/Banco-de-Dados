<div class="container">
    <div>
        <h3>Edite seu endereço de email</h3>
        <form action="<?php echo URL; ?>login/updateemail" method="POST">
            <?php foreach ($user_info as $user) { ?>
                <input type="text" name="email" value="<?php echo htmlspecialchars($user->email, ENT_QUOTES, 'UTF-8'); ?>" />
                <input type="hidden" name="user_id" value="<?php echo htmlspecialchars($user->id, ENT_QUOTES, 'UTF-8'); ?>" /><br><br>
                <input type="submit" name="submit_update_email" value="Editar" style="width: 42%" />
            <?php } ?>
        </form>
        <div class="box"></div>
    </div>
</div>


