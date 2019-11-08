<div class="box"></div>
<div class="loginbox">
    <h1>Faça Seu Cadastro Aqui</h1>
    <form action="<?php echo URL; ?>signup/adduser" method="POST">
        <p>Usuário</p>
        <input type="text" name="username" placeholder="Insira seu nome de usuário" value="" required />
        <p>Email</p>
        <input type="text" name="email" placeholder="Insira seu email institucional" value="" required />
        <p>Senha</p>
        <input type="password" name="password" placeholder="Insira sua senha" value="" required /><br>
        <p class="msg">Senhas devem conter pelo menos 8 caracteres incluindo pelo menos uma 
            letra e um número.</p><br>
        <input type="submit" name="submit_add_user" value="Cadastrar"><br>
        <p class="msg">Ao clicar em "Cadastrar", você aceita nossos termos de uso e política 
            de privacidade.</p>
    </form>
</div>
