<div id="top" class="panel panel-default panel-block panel-title-block">
    <div class="panel-heading">
        <div>
            <h1>Города</h1>
            <div class="pull-right">
                
                <?php if(isset($add_url) && $add_url):?>
                    <button class="btn btn-primary btn-sm btn-redirect" data-href="<?=url($add_url)?>">Добавить</button>
                <?php endif?>
                
                <?php if(isset($back_url) && $back_url):?>
                    <button class="btn btn-primary btn-sm btn-redirect" data-href="<?=url($back_url)?>">Назад</button>
                <?php endif?>

            </div>
        </div>
    </div>
</div>