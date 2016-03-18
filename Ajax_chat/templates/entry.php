<?php require ('header.php');?>

<div class="row">
    <div class="panel-heading text-center">
        <a class="btn btn-danger" href="?act=logout" type="submit">Выйти</a>
    </div>
    <div class="panel panel-group ">
        <div class="panel-heading"><h1 class="text-success text-center">Чат</h1></div>
        <div class="panel-body">
            <ul id="chat">
                <?php

                    $result_chat = $mysqli->query("SELECT * FROM chat ORDER BY id_chat DESC");
                    if($result_chat->num_rows > 0){
                        $arr = $result_chat->fetch_assoc();
                        do{
                            printf('<li id="%s">%s</li>', $arr['id_chat'], $arr['text']);
                        }while($arr = $result_chat->fetch_assoc());
                    }else{
                        echo "<span class='chat_empty text-left'><h4>Чат пуст</h4></span>";
                    }

                ?>
            </ul>
        </div>
        <div class="panel-footer text-center" id="textarea_button">
            <div>
                <textarea cols="60" rows="5"></textarea>
            </div>
            <div>
                <button class="btn btn-primary">Отправить</button>
            </div>
        </div>
    </div>
</div>

<?php require ('footer.php');?>