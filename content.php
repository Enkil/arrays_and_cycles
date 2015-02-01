<!--<div class="container">-->
<!--    <div class="row">-->
<!---->
<!--        <div class="col-sm-5">-->
<!--            <img class="img-responsive img-rounded" src="img/item-1.jpg" alt=""/>-->
<!--        </div>-->
<!---->
<!--        <div class="col-sm-7">-->
<!--            <h2>f</h2>-->
<!--            <p>ffffff</p>-->
<!--            <h3>ff</h3>-->
<!--            <h3>111</h3>-->
<!--            <button type="button" class="btn btn-primary">Primary</button>-->
<!--        </div>-->
<!---->
<!--    </div>-->
<!--</div>-->



<div class="container">

    <?
        $itemsOnPage = array_slice($items, ($page_num - 1) * $items_per_page , $items_per_page);

        foreach ($itemsOnPage as $item){

            echo '<div class="row">';

                echo '<div class="col-sm-3">';
                   echo '<img class="img-responsive img-rounded" src=img/'  . $item['image'] . ' alt="alt text"/>';
                echo '</div>';

                echo '<div class="col-sm-9">';
                    echo '<h2>' . $item['title'] . '</h2>';
                    echo '<p>' . 'Описание: ' . '<br/>' . $item['description'] . '</p>';
                    echo '<h4>' . 'Категория: ' . $item['category'] . '</h4>';
                    echo '<h4>' . 'Стоимость: ' . $item['price'] . ' руб.' . '</h4>';
                    echo '<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".modal" id="orderBtn">Заказать</button>';
                echo '</div>';

            echo '</div>';

        }

    ?>

</div>


<!-- Modal -->
<div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Оформить заказ</h4>
            </div>

            <div class="modal-body">
                <form action="orderFormAction.php" method="post" id="orderForm">

                    <div class="form-group">
                        <label for="name">Как к Вам обращаться?</label>
                        <input type="text" class="form-control" name="name" placeholder="Меня зовут:" required="">
                    </div>

                    <div class="form-group">
                        <label for="email">Ваш email?</label>
                        <input type="email" class="form-control" name="email" placeholder="Пишите мне на:" required="">
                    </div>

                    <div class="form-group">
                        <label for="address">Адрес доставки?</label>
                        <textarea class="form-control" rows="3" name="address" placeholder="Пришлите заказ по адресу:" required=""></textarea>
                    </div>

                </form>
            </div>

            <div class="modal-footer">
                <button type="submit" class="btn btn-primary" form="orderForm">Заказать</button>
            </div>

        </div>
    </div>
</div>