<div class="container">
    <!-- main content output -->
    <div class="box"></div>
    <table>
        <tbody>
        <?php foreach ($user_info as $user) { ?>
            <tr>
                <td style="font-weight: bold;"><?php if (isset($user->username)) echo htmlspecialchars($user->username, ENT_QUOTES, 'UTF-8');?></td>
                <td class="text_align"><a href="<?php echo URL . 'login/editusername/' . htmlspecialchars($user->id, ENT_QUOTES, 'UTF-8');?>">editar</a></td>
            </tr>
            <tr>
                <td style="font-weight: bold;"><?php if (isset($user->email)) echo htmlspecialchars($user->email, ENT_QUOTES, 'UTF-8');?></td>
                <td class="text_align"><a href="<?php echo URL . 'login/editemail/' . htmlspecialchars($user->id, ENT_QUOTES, 'UTF-8');?>">editar</a></td>
            </tr>
            <tr>
                <td style="font-weight: bold;">Mude sua senha</td>
                <td class="text_align"><a href="<?php echo URL . 'login/editpass/' . htmlspecialchars($user->id, ENT_QUOTES, 'UTF-8');?>">mudar</a></td>
            </tr>
            <tr>
                <td style="font-weight: bold;">Apagar Conta</td>
                <td class="text_align"><a href="<?php echo URL . 'login/deleteuser/' . htmlspecialchars($user->id, ENT_QUOTES, 'UTF-8');?>">apagar</a></td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
</div>
