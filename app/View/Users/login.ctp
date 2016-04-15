<?php echo $this->Html->css('cake.login_style'); ?>

<div class="container">
    <form class="form-signin" action="" method="post">
        <?php if(isset($error)) :?>
            <div class="alert alert-danger">入力されたIDまたはパスワードが間違っています。</div>
        <?php endif; ?>
        <h2 class="form-signin-heading">管理画面</h2>
        <label for="inputLoginId" class="sr-only">ログインID</label>
        <input type="text" name="data[User][email]" id="inputLoginId" class="form-control" placeholder="ログインID" required autofocus>
        <label for="inputPassword" class="sr-only">パスワード</label>
        <input type="password" name="data[User][passwd]" id="inputPassword" class="form-control" placeholder="パスワード" required>
        <button class="btn btn-lg btn-primary btn-block" type="submit">ログイン</button>
    </form>
</div>