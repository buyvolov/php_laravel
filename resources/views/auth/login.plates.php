<?php $this->layout('layouts/login') ?>
    <body class="login-page">
        
        <script>
	        var theme = $.cookie('protonTheme') || 'default';
	        $('body').removeClass (function (index, css) {
	            return (css.match (/\btheme-\S+/g) || []).join(' ');
	        });
	        if (theme !== 'default') $('body').addClass(theme);
        </script>
        <!--[if lt IE 8]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <form role="form" action="/auth/login" method="post">
            <input type="hidden" name="_token" value="<?=csrf_token()?>" />
            <section class="wrapper scrollable animated fadeInDown">
                <section class="panel panel-default">
                    <div class="panel-heading">
                        <div>
                            <img src="/images/proton-logo.png" alt="proton-logo">
                            <h1>
                                <span class="title">
                                    Proton
                                </span>
                                <span class="subtitle">
                                    Пегий дудошник
                                </span>
                            </h1>
                        </div>
                    </div>
                    <ul class="list-group">
            
                        <li class="list-group-item">
                            <span class="login-text">
                                Login with your Proton account
                            </span>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" name="email" class="form-control input-lg" id="email" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" name="password" class="form-control input-lg" id="password" placeholder="Password">
                            </div>
                        </li>
                    </ul>
                    <div class="panel-footer">
                        <input type="submit" class="btn btn-lg btn-success" value="ВОЙТИ">
                        <br>
                        <a class="forgot" href="javascript:;">Забыли пароль?</a>
                    </div>
                </section>
            </section>
        </form>
    </body>
</html>
