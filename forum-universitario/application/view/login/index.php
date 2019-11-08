<div class="box"></div>
<div class="loginbox">
    <h1>Entre Aqui</h1>
    <?php session_start(); 
        if (isset($_SESSION["not_authenticated"])) { ?>
            <div class="notification"> 
                <p><?php echo "ERRO: Usuário ou senha inválidos"; ?></p>
            </div>  
    <?php } ?>
    <?php unset($_SESSION["not_authenticated"]); ?>
    <form action="<?php echo URL; ?>login/userlogin" method="POST">
        <p>Email</p>
        <input type="text" name="email" placeholder="Insira seu email"  value="" required />
        <p>Senha</p>
        <input type="password" name="password" placeholder="Insira sua senha"  value="" required /><br>
        <input type="submit" name="submit_login" value="Login"><br>
        <a href="#">Esqueceu sua senha?</a><br>
        <a href="<?php echo URL . 'signup/index'; ?>">Não tem uma conta?</a>
    </form>
</div>
