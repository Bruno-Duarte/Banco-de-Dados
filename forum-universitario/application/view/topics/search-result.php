<div class="container">
    <p style="color: #4876ff">Encontramos <?php echo count($posts); ?> resultados.</p>
    <div class="box"></div>
    <table>
        <tbody>
        <?php if ($posts) { ?>
            <?php foreach ($posts as $post) { ?>
                <tr>
                    <td class="border_bottom"><?php if (isset($post->title)) echo htmlspecialchars($post->title, ENT_QUOTES, 'UTF-8');?></td>
                </tr>
            <?php } ?>
        <?php } ?>
        </tbody>
    </table>
</div>

