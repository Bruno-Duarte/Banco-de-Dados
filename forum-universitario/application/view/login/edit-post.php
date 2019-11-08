<div class="container">
    <div>
        <h3>Edite sua postagem</h3>
        <form action="<?php echo URL; ?>login/updatepost" method="POST">
            <?php foreach ($post as $p) { ?>
                <textarea name="content" rows="10" cols="70"><?php echo $p->content ?></textarea><br>
                <input type="hidden" name="user_id" value="<?php echo htmlspecialchars($_SESSION["newsession"], ENT_QUOTES, 'UTF-8'); ?>" />
                <div>Tópico: 
                <select name="topic_id">
                    <?php foreach ($topics as $topic) { ?>
                        <option value="<?php echo htmlspecialchars($topic->id, ENT_QUOTES, 'UTF-8'); ?>"><?php echo $topic->title ?></option>
                    <?php } ?>
                </select>
                </div>
                <input type="hidden" name="post_id" value="<?php echo htmlspecialchars($p->id, ENT_QUOTES, 'UTF-8'); ?>" />
                <br><input type="submit" name="submit_update_post" value="Editar" style="width: 43%" />
            <?php } ?>
        </form>
        <div class="box"></div>
    </div>
</div>


