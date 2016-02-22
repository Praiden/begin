
<div class="container">
    <form action="" method="post" class="center-block form-review">
        <h2 class="center-block">Оставить отзыв</h2>
        <div class="form-group">
            <label for="name">Ф.И.О.</label>
            <input type="text" class="form-control" name="name" id="name"  required>
        </div>
        <div class="form-group">
            <label for="review">Текст Озыва</label>
            <textarea class="form-control" name="review" id="review" rows="5"></textarea>
        </div>
        <button type="submit" class="btn btn-primary btn-block">Отправить</button>
    </form>
        <div class="reviews">
            <h2 class="center-block">Все отзывы:</h2>
            <div class="panel panel-default">

                <?php foreach ($article as $art): ?>

                    <div class="panel-heading">
                        <p>Автор: <?= $art['author']; ?></p>
                    </div>

                    <div class="panel-body">
                        <p>Cтатья: <?= $art['text']; ?></p>
                    </div>

                    <div class="panel-data">
                        <p><?= $art['data_create']; ?></p>
                    </div>

                <?php endforeach; ?>

            </div>
        </div>
    <nav>
        <ul class="pagination">
            <li>
                <a href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>
            <li class="active"><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
            <li>
                <a href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                </a>
            </li>
        </ul>
    </nav>
</div>
