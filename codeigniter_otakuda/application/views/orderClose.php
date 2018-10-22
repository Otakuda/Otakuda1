<link rel="stylesheet" href="<?= base_url() ?>js/rate/jquery.rateyo.min.css"/>
<form action="<?= base_url() ?>delivery_finish/insertRate/<?= $access['rider_id']; ?>" method="post">
    <center>
        <br>
        您的評分
        <br>
        <div class="rateYo" id="a"></div>
        <input type="hidden" id="t" name="rate">
        <br>

        <button value="submit">確定</button>
        <button>取消</button>
    </center>
</form>
<script type="text/javascript" src="<?= base_url() ?>js/rate/jquery.min.js"></script>
<script type="text/javascript" src="<?= base_url() ?>js/rate/jquery.rateyo.js"></script>
<script>
    $(".rateYo").rateYo({
        onSet: function (rating, rateYoInstance) {
            $(this).next().val(rating);
        },
        rating: 0,
        starWidth: "50px",
        numStars: 5,
        fullStar: true
    });
</script>