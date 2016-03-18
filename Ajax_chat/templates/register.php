<?php require ('header.php');?>


<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading"><h3>Регистрация</h3></div>
            <div class="panel-body">
                <form class="form-horizontal" role="form" method="POSt" action="" name='form'>

                    <div class="form-group">
                        <label class="col-md-4 control-label">Логин</label>

                        <div class="col-md-6">
                            <input onblur="check(this.value,'login')" type="text" class="form-control" name="login" placeholder="от 3-20 символов"/>
                            <span class=" text-danger" id="login"></span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label">E-Mail</label>

                        <div class="col-md-6">
                            <input onblur="check(this.value,'email')" type="email" class="form-control" name="email" placeholder="от 6-50 символов"/>
                            <span class="text-danger" id="email"></span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label">Пароль</label>

                        <div class="col-md-6">
                            <input onblur="check(this.value,'password')" type="password" class="form-control" name="password" placeholder="от 6-20 символов"/>
                            <span class="text-danger" id="password"></span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label">Повторите пароль</label>

                        <div class="col-md-6">
                            <input onblur="check(this.value,'password_conf')" type="password" class="form-control" name="password_conf" placeholder="Повторяйте внимательно" />
                            <span class="text-danger" id="password_conf"></span>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <input type="submit" class="btn btn-primary" id="submit" name="submit" value="Зарегистрирываться" onclick="reg(this.form)">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php require ('footer.php');?>