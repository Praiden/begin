<?php require ('header.php');?>


<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading"><h3>Авторизация</h3></div>
            <div class="panel-body">
                <form class="form-horizontal" role="form" method="POST" action="">

                    <div class="form-group">
                        <label class="col-md-4 control-label">Логин</label>

                        <div class="col-md-6">
                            <input onblur="check(this.value,'login_auth')" type="text" class="form-control" name="login_auth" />
                            <span class="text-danger" id="login_auth"></span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label">Пароль</label>

                        <div class="col-md-6">
                            <input onblur="check(this.value,'password_auth')" type="password" class="form-control" name="password_auth" />
                            <span class="text-danger" id="password_auth"></span>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <input type="submit" class="btn btn-primary" name="enter" value="Вход" onclick="auth(this.form)">

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php require ('footer.php');?>