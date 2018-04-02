<!DOCTYPE html>
<html lang="en">
        
        <head>
                <meta charset="utf-8">
                <title>
                        test
                </title>
                <meta name="viewport" content="width=device-width, initial-scale=1.0">

                <?php echo $this->Html->css(['Admin.vendor/bootstrap.min.css','flat-ui.css','my.css'])?>

                <!--[if lt IE 9]>
                        <?php echo $this->Html->script(['Admin.vendor/html5shiv','vendor/respond.min']);?>
                <![endif]-->
        </head>
        
        <body>
                <header class="header-navbar" id="layout-header">
                        <!-- Nav -->
                        <nav role="navigation" class="navbar navbar-inverse navbar-fixed-top" id="layout-nav">
                                <div class="container">
                                        <div class="navbar-header">
                                                <button data-target=".navbar-main-collapse" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
                                                        <span class="sr-only">
                                                                Toggle navigation
                                                        </span>
                                                        <span class="icon-bar">
                                                        </span>
                                                        <span class="icon-bar">
                                                        </span>
                                                        <span class="icon-bar">
                                                        </span>
                                                </button>
                                                <a href="/admin" class="navbar-brand">test</a>
                                        </div>
                                        <div class="navbar-collapse navbar-main-collapse collapse" style="height: 2px;">
                                                <ul class="nav navbar-nav navbar-left my-navbar-left-marign-left">
                                                        <?php foreach($topMenu as $key=>$m){?>
                                                        <li class=" " id="topMenu_<?=$m->key?>">
                                                                <a class="" href="<?=$m->url?>"><?=$m->name?></a>
                                                        </li>
                                                        <? } ?>
                                                </ul>

                                                <ul class="nav navbar-nav  my-navbar-right-font pull-right">
                                                        <li class=" dropdown">
                                                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                                                Admin
                                                                <span class="caret"></span>            </a>
                                                                <span class="dropdown-arrow">
                                                                </span>
                                                                <ul class="dropdown-menu">
                                                                       <li class=" ">
                                                                                <a class="" href="http://localhost/install/about">
                                                                                系统首页
                                                                                </a>
                                                                        </li>
                                                                        <li class=" ">
                                                                                <a class="" href="http://localhost/install/about">
                                                                                退出
                                                                                </a>
                                                                        </li>
                                                                </ul>
                                                        </li>
                                                        <!--<li class=" ">
                                                                <a class="" href="http://localhost/install">
                                                                注册
                                                                </a>
                                                        </li>
                                                        <li class=" ">
                                                                <a class="" href="http://localhost/install">
                                                                登录
                                                                </a>
                                                        </li>-->
                                                </ul>
                                        </div>
                                </div>
                        </nav>
                </header>

                <div id="layout-content" >
                        <div class="container">

                                <div class="row">
                                        <div class="col-md-3">
                                                <div class="panel panel-userleft">
    
                
                                                        <div class="panel-heading"><strong>帐户</strong> 设置</div>
                                                                <div class="list-group">
                                                                        <a href="#" class=" active list-group-item"><i class="fui-user"></i><span> 个人信息</span></a>
                                                                        <a href="#" class=" list-group-item"><i class="fui-lock"></i><span> 安全</span></a>
                                                                        <a href="/user/account/emailing" class=" list-group-item"><i class="fui-volume"></i><span> 消息</span></a>
                                                                </div>
    
                
                                                        </div>
                                        </div>
                                        <div class="col-md-9">
    

                                                <div class="panel panel-third">

                                                        <div class="panel-body">
                                                               <?= $this->fetch('content') ?>
                                                        </div>
                                                </div>

                                        </div>

                                </div>
                        </div>
                </div>
                
                
                <footer id="layout-footer">
                        <div class="container">
                                <nav class="pull-left">
                                        <ul>
                                                <li class="active">
                                                        <a href="#">Home</a>
                                                </li>
                                                <li>
                                                        <a href="#">Company</a>
                                                </li>
                                                <li>
                                                        <a href="#">Portfolio</a>
                                                </li>
                                                <li>
                                                        <a href="#">Blog</a>
                                                </li>
                                                <li>
                                                        <a href="#">Contact</a>
                                                </li>
                                        </ul>
                                </nav>
                                <div class="social-btns pull-right">
                                        <a href="#"><div class="fui-vimeo"></div><div class="fui-vimeo"></div></a>
                                        <a href="#"><div class="fui-facebook"></div><div class="fui-facebook"></div></a>
                                        <a href="#"><div class="fui-twitter"></div><div class="fui-twitter"></div></a>
                                </div>
                                <div class="additional-links">
                                        Be sure to take a look to our
                                        <a href="#">Terms of Use</a>
                                        and
                                        <a href="#">Privacy Policy</a>
                                </div>
                        </div>
                </footer>
                <?php echo $this->Html->script(['Admin.vendor/jquery.min','Admin.flat-ui.min']);?>
                <?= $this->fetch('script_include') ?>
                <script>
                <?= $this->fetch('script_last') ?>
                </script>
        </body>

</html>