<div class="container">
    <p style="color: #4876ff">Encontramos <?php echo count($posts); ?> resultados.</p>
    <div class="box"></div>
    <table>
        <tbody>
        <?php if ($posts) { ?>
            <?php foreach ($posts as $post) { ?>
                <tr>
                    <td class="border_bottom"><?php if (isset($post->content_post)) echo htmlspecialchars($post->content_post, ENT_QUOTES, 'UTF-8');?></td>
                    <td class="text_align" rowspan="2"></td>
                </tr>
                <tr>
                	<td><?php if (isset($post->content_comment)) echo htmlspecialchars($post->content_comment, ENT_QUOTES, 'UTF-8'); ?></td>
                </tr>
            <?php } ?>
        <?php } ?>
        </tbody>
    </table>
</div>

