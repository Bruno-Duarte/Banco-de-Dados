<div class="container">
	<h3>O que você procura?</h3>
    <form action="<?php echo URL; ?>home/search" method="POST">
        <input type="text" name="keywords" value="" />
        <input type="submit" name="submit_search" value="Buscar" />
    </form>
    <div class="box"></div>
    <table>
        <tbody>
        <?php foreach ($posts as $post) { ?>
            <tr>
                <td class="border_bottom"><?php if (isset($post->content_post)) echo htmlspecialchars($post->content_post, ENT_QUOTES, 'UTF-8');?></td>
                <td class="text_align" rowspan="2"></td>
            </tr>
            <tr>
            	<td><?php if (isset($post->content_comment)) echo htmlspecialchars($post->content_comment, ENT_QUOTES, 'UTF-8'); ?></td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
</div>

