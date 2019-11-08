<div class="container">
    <div>
        <h3>Digite sua nova senha</h3>
        <form action="<?php echo URL; ?>login/updatepass" method="POST">
            <?php foreach ($user_info as $user) { ?>
                <input type="password" name="password" value="" style="background-color: #ccc" required />
                <input type="hidden" name="user_id" value="<?php echo htmlspecialchars($user->id, ENT_QUOTES, 'UTF-8'); ?>" /><br><br>
                <input type="submit" name="submit_update_pass" value="Mudar" style="width: 42%" />
            <?php } ?>
        </form>
        <div class="box"></div>
    </div>
</div>


