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
<!--        </div>-->
<!---->
<!--    </div>-->
<!--</div>-->


<div class="container">

    <?

        foreach (array_slice($items, $page_num , $items_per_page) as $key => $item){

            echo '<div class="row">';

                echo '<div class="col-sm-3">';
                   echo '<img class="img-responsive img-rounded" src=img/'  . $items[$key]['image'] . ' alt="alt text"/>';
                echo '</div>';

                echo '<div class="col-sm-9">';
                    echo '<h2>' . $items[$key]['title'] . '</h2>';
                    echo '<p>' . 'Описание: ' . '<br/>' . $items[$key]['description'] . '</p>';
                    echo '<h4>' . 'Категория: ' . $items[$key]['category'] . '</h4>';
                    echo '<h4>' . 'Стоимость: ' . $items[$key]['price'] . ' руб.' . '</h4>';
                echo '</div>';

            echo '</div>';

        }

?>
</div>

