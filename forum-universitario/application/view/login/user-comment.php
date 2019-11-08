<div class="container">
    <h3>Faça seu comentário</h3>
    <form action="<?php echo URL; ?>login/comment" method="POST">
        <textarea name="content" rows="10" cols="70" required ></textarea><br>
        <input type="hidden" name="post_id" value="<?php echo htmlspecialchars($post_id, ENT_QUOTES, 'UTF-8'); ?>" />
        <input type="hidden" name="user_id" value="<?php echo htmlspecialchars($_SESSION["newsession"], ENT_QUOTES, 'UTF-8'); ?>" />
        <input type="submit" name="submit_comment" value="Comentar" style="width: 43%" />
    </form>
    <div class="box"></div>
</div>
