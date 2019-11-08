<div class="container">
    <h3>O que você procura?</h3>
    <form action="<?php echo URL; ?>topics/search" method="POST">
        <input type="text" name="keywords" value="" />
        <input type="submit" name="submit_search" value="Buscar" />
    </form>
    <div class="box"></div>
    <table>
        <tbody>
        <?php foreach ($topics as $topic) { ?>
            <tr>
                <td class="border_bottom"><?php if (isset($topic->title)) echo htmlspecialchars($topic->title, ENT_QUOTES, 'UTF-8');?></td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
</div>

