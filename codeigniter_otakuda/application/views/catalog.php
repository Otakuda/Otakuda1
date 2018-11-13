<div class="btm-cont clear">
    <div class="btm-left">
        <?php foreach ($product as $catalog) { ?>
            <div class="group hasVouchers">
                <div class="one clear">
                    <div class="pic">
                        <div class="imgbox" style="height: 100%; width: 100%;">
<!--                            <img src="--><?//= base_url() . $catalog['photo_name'] ?><!--">-->
                        </div>
                    </div>
                    <div class="info">
                        <a class="fr buy"
                           href="<?= base_url() ?>product_details/product_getDetail/<?= $catalog['product_id'] ?>">購買</a>
                        <p class="name">
                            <span><?= $catalog['product_name'] ?></span>
                        </p>
                        <p class="sale">已售0</p>
                        <p class="price">
                            RM<?= $catalog['product_price'] ?>
                        </p>
                    </div>
                </div>
                <div class="line">
                </div>
            </div>
        <?php } ?>
    </div>
</div>