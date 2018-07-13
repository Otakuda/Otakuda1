
<div id="react">
    <div class="page index" data-reactroot="">

        <div class="op-area">
            <div class="choose-by-province"><h3 class="l-attr">按地区选择:</h3>
                <div class="choose-wrap">
                    <select id='sel_city'>
                        <option>-- 请选择地区 --</option>
                        <?php
                        foreach ($states as $state) {
                            echo "<option value='" . $state['state_name'] . "'>" . $state['state_name'] . "</option>";
                        }
                        ?>
                    </select>
                </div>
            </div>

        </div>

    </div>
</div>

<script>
    $(document).ready(function () {

        $(document).on('change', '#sel_city', function () {

            var state = $('#sel_city').val();
            var url = "<?= base_url() . "place/update_state" ?>";
            $.post(url, {
                state: state
            }, function (response) {
                window.location.href = "<?=base_url()?>";
            });

        });

    });
</script>



