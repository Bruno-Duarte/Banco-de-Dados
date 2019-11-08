<div class="container">
    <h3>Faça sua pergunta ou postagem</h3>
    <form action="<?php echo URL; ?>login/post" method="POST">
        <textarea name="content" rows="10" cols="70" required ></textarea><br>
        <input type="hidden" name="user_id" value="<?php echo htmlspecialchars($_SESSION["newsession"], ENT_QUOTES, 'UTF-8'); ?>" />
        <p>Tópico: 
        <select name="topic_id">
            <?php foreach ($topics as $topic) { ?>
                <option value="<?php echo htmlspecialchars($topic->id, ENT_QUOTES, 'UTF-8'); ?>"><?php echo $topic->title ?></option>
            <?php } ?>
        </select>
        </p>
        <br><input type="submit" name="submit_post" value="Postar" style="width: 43%" />
    </form>
    <div class="box"></div>
</div>
