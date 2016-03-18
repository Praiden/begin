<?php require ('header.php');?>

<div class="my span6 offset3">
    <h2><strong>Добро пожаловать в онлайн чат</strong></h2>
</div>

<div class="span6 offset3">
    <h3>Для того чтоб начать чат Вам нужно</h3>

    <div class="btn_auth span2 btn-group-lg">
        <div class="btn">
            <a href="?act=view-auth"><input type="submit"  class="btn-success btn-lg" value="Авторизоваться"></a>
        </div>
    </div>
</div>

<div class="span6 offset3">
    <h3>Или если Вы еще не с нами, то</h3>

    <div class="btn_reg span3 btn-group-lg">
        <div class="btn">
            <a href="?act=view-register"><input type="submit" class="btn-info btn-lg" value="Зарегистрироваться"></a>
        </div>
    </div>
</div>




<?php require ('footer.php');?>
