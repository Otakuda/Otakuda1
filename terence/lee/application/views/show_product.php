<div id="app">
    <section data-reactroot="" class="detail-wrap">
        <div class="content">
            <div class="details clear">
                <div class="d-left">
                    <div class="name"><?=$product['shop_name']?></div>
                    <div class="address">
                        <p>地址：<?=$product['address']?></p>
                        <p>电话：<?=$product['phone']?></p>
                    </div>
                </div>
                <div class="d-right">
                    <div class="big">
                        <div class="imgbox" style="height: 100%; width: 100%;">
                            <img src="<?=base_url(). $product['file_name']; ?>">
                        </div>
                    </div>
                </div>
                <div><span></span></div>
            </div>
            <div class="btm-cont clear">
                <div class="btm-left">
                    <div>
                        <div class="group hasVouchers">
                            <div>
                                <div class="one clear">
                                    <div class="pic">
                                        <div class="imgbox" style="height: 100%; width: 100%;">
                                            <img src="<?=base_url().$product['product_image']?>">
                                        </div>
                                    </div>
                                    <div class="info">
                                        <a class="fr buy" href="<?=base_url()?>product_details/product_getDetail/<?=$product['product_id']?>">購買</a>
                                        <p class="name">
                                            <span><?=$product['product_name']?></span>
                                        </p>
                                        <p class="sale">已售0</p>
                                        <p class="price">
                                            RM<?=$product['product_price']?>
                                        </p>
                                    </div>
                                </div>
                                <div class="line"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>