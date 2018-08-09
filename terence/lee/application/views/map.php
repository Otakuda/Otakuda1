

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
<<<<<<< HEAD
        <div id="app">
            <section data-reactroot="" class="detail-wrap">
                <div class="content">
                    <div class="details clear">
                        <div class="d-left">
                            <a href="<?=base_url()?>show_product/product_detail/<?=$item['shop_id']?>"><div class="name"><?= $item['shop_name'] ?></div></a>
                            <div class="address">
                                <p>地址：<?= $item['address'] ?></p>
                                <p>电话：<?= $item['phone'] ?></p>
                            </div>
                        </div>
                        <div class="d-right">
                            <div class="big">
                                <div class="imgbox" style="height: 100%; width: 100%;">
                                    <a href="<?=base_url()?>show_product/product_detail/<?=$item['shop_id']?>"><img src="<?= $item['file_name']; ?>"></a>
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
=======
            <table>
                <tr>
                    <td rowspan="2" colspan="2"><center><img src="<?= $item->file_name;?>" width="50%" height="200px"/></center></td>
                    <td></td>
                    <td>店名：<?= $item->name ?><br>
                        联络号码：<?= $item->phone ?><br>
                        地址：<?= $item->address ?><br>
                    </td>
                </tr>
>>>>>>> 8987446d231e554a49338a398c28ef505a9fa455







