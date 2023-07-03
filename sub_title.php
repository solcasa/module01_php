<div class="sub_page">
            <a href="/">홈</a> : <?=$cate_title?> : <?=$title?> <?=$num?>
</div>


<hr>

<div class="submenu">
    <? include '../nav.php' ?>
</div>

<hr>


<style>
    .sub_page {
        font-size: 100px;
    }

    .submenu li.on {
        color: tomato;
    }
</style>
<script>
    $(function(){
        console.log(<?=$num?>);
        $('.submenu li').eq(<?=$num - 1 ?>).addClass('on');
    })
</script>