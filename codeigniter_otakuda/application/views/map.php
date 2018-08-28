<div id="react">
    <div class="page index">
        <div class="choose-by-province">
            <div class="choose-wrap">
                <div class="provinces-wrapper clearfix">

                </div>
            </div>
            <div class="cities-wrapper clearfix">

            </div>
        </div>
        <?php foreach ($query as $item): ?>

        <div id="app">
            <section data-reactroot="" class="detail-wrap">
                <div class="content">
                    <div class="details clear">
                        <div class="d-left">
                            <a href="<?=base_url()?>show_product/shop_detail/<?=$item['shop_id']?>">
                                <div class="name"><?= $item['shop_name'] ?></div>
                            </a>
                            <div class="address">
                                <p>地址：<?= $item['address'] ?></p>
                                <p>电话：<?= $item['phone'] ?></p>
                            </div>
                        </div>
                        <div class="d-right">
                            <div class="big">
                                <div class="imgbox" style="height: 100%; width: 100%;">
                                    <a href="<?=base_url()?>show_product/shop_detail/<?=$item['shop_id']?>"><img src="<?= $item['file_name']; ?>"></a>
                                </div>
                            </div>
                        </div>
                        <div><span></span></div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </section>
        </div>
    </div>
</div>







