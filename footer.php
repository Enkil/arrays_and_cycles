<!-- Pagination -->
<nav class=" text-center">
    <ul class="pagination">

        <?
            if ($page_num == 1){
                $linkStatus = "disabled";
            } else {
                $linkStatus = "";
            }
        ?>

        <!-- Arrow left -->
        <li class="<? echo $linkStatus ?>">
            <? echo "<a href='index.php?page_num=" . ($page_num - 1) . "' aria-label='Туда'>"; ?>
                <span aria-hidden="true">&laquo;</span>
            </a>
        </li>

        <!-- List pages -->
        <?
            for ($i = 1; $i <= ceil((count($items)+1) / $items_per_page); $i++) {
                if ($i == $page_num) {
                    echo '<li class="active">' . "<a href='index.php?page_num=$i'>" . $i . '</a></li>';
                } else {
                    echo '<li >' . "<a href='index.php?page_num=$i'>" . $i . '</a></li>';
                }
            }
        ?>

        <!-- Arrow right -->
        <?
            if ($page_num == (count($items)+1) / $items_per_page){
                $linkStatus = "disabled";
            } else {
                $linkStatus = "";
            }
        ?>

        <li class="<? echo $linkStatus ?>">
            <? echo "<a href='index.php?page_num=" . ($page_num + 1) . "' aria-label='Туда'>"; ?>
                <span aria-hidden="true">&raquo;</span>
            </a>
        </li>

    </ul>
</nav>
<!-- / Pagination -->

<!-- JavaScript -->
<!--<script src="bower_components/jquery/dist/jquery.min.js"></script>-->
<!--<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>-->
<!--<script src="bower_components/bootstrapValidator/dist/js/bootstrapValidator.min.js"></script>-->
<!--<script src="js/form-validate.js"></script>-->
<!-- / JavaScript -->

</body>
</html>
