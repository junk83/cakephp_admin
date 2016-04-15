<?php echo $this->Html->css('cake.home_style'); ?>
<?= $this->assign('title', '管理画面') ?>

<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="/cakephp_admin/home">管理画面</a>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#"><?php if($user) echo $user; ?></a></li>
          <li><a href="/cakephp_admin/logout">ログアウト</a></li>
        </ul>
      </div>
    </div>
</nav>
<div class="container-fluid">
    <div class="row">
      <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
              <li class=<?php if($this->action == 'home') echo "active" ?>><a href="/cakephp_admin/home">ホーム</a></li>
              <li class=<?php if($this->action == 'contacts' || $this->action == 'detail') echo "active" ?>><a href="/cakephp_admin/contacts">お問い合わせ管理</a></li>
          </ul>
      </div>
    </div>
</div>