<div class="container">
    <div>
        <h3>Edite seu nome de usuário</h3>
        <form action="<?php echo URL; ?>login/updateusername" method="POST">
            <?php foreach ($user_info as $user) { ?>
                <input type="text" name="username" value="<?php echo htmlspecialchars($user->username, ENT_QUOTES, 'UTF-8'); ?>" />
                <input type="hidden" name="user_id" value="<?php echo htmlspecialchars($user->id, ENT_QUOTES, 'UTF-8'); ?>" /><br><br>
                <input type="submit" name="submit_update_username" value="Editar" style="width: 42%" />
            <?php } ?>
        </form>
        <div class="box"></div>
    </div>
</div>


