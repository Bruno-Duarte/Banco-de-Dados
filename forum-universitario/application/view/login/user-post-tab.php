<div class="container">
    <h3>O que você procura?</h3>
    <form action="<?php echo URL; ?>login/search" method="POST">
        <input type="text" name="keywords" value="" />
        <input type="submit" name="submit_search" value="Buscar" />
    </form>
    <div class="box"></div>
    <table>
        <tbody>
        <?php if ($posts) { ?>
            <?php foreach ($posts as $post) { ?>
                <tr>
                    <td style="font-weight: bold;"><?php if (isset($post->content)) echo htmlspecialchars($post->content, ENT_QUOTES, 'UTF-8');?></td>
                    <td class="text_align"><a href="<?php echo URL . 'login/editpost/' . htmlspecialchars($post->id, ENT_QUOTES, 'UTF-8');?>">editar</a></td>
                    <td class="text_align"><a href="<?php echo URL . 'login/deletepost/' . htmlspecialchars($post->id, ENT_QUOTES, 'UTF-8');?>">apagar</a></td>
                </tr>
            <?php } ?>
        <?php } else { ?>
            <p style="color: #4876ff">Você não possui nenhum post.</p>
        <?php } ?>
        </tbody>
    </table>
</div>
