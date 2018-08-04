

<div id="react">
    <div class="page index" data-reactroot="">

        <div class="choose-by-province">
            <div class="choose-wrap">
                <div class="provinces-wrapper clearfix">

                </div>
            </div>
            <div class="cities-wrapper clearfix">

            </div>
        </div>
        <?php foreach ($query as $item): ?>
            <table>
                <tr>
                    <td rowspan="2" colspan="2"><center><img src="<?= $item->file_name;?>" width="50%" height="200px"/></center></td>
                    <td></td>
                    <td>店名：<?= $item->name ?><br>
                        联络号码：<?= $item->phone ?><br>
                        地址：<?= $item->address ?><br>
                    </td>
                </tr>

            </table>
            <div class="op-area">
            </div>
        <?php endforeach; ?>





    

