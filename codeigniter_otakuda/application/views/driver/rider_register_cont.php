<meta charset="UTF-8">
<meta name="viewport" content="initial-scale=1.0">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css"
      integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
<form action="<?= base_url(); ?>index.php/rider/Rider_C/add_rider_cont" method="post" enctype="multipart/form-data">

    <input type="hidden" name="rider_name" id="rider_name" value="<?=$rider_name?>">
    <input type="hidden" name="rider_email" id="rider_email" value="<?=$rider_email?>" >
    <input type="hidden" name="rider_password" id="rider_password" value="<?=$rider_password?>" >

    <legend>Contact Us Today!</legend>
    <div class="form-group">
        <label class="col-md-4 control-label">身份证号码<span style="color:red">*</span></label>
        <div class="col-md-4 inputGroupContainer">
            <input name="rider_nric" placeholder="NRIC (New)" class="form-control" type="text">
        </div>
    </div>



    <div class="form-group">
        <label class="col-md-4 control-label">出身日期<span style="color:red">*</span></label>
        <div class="col-md-4 inputGroupContainer">

            <select name="days" id="days">
                <option value=" "></option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
                <option>6</option>
                <option>7</option>
                <option>8</option>
                <option>9</option>
                <option>10</option>
                <option>11</option>
                <option>12</option>
                <option>13</option>
                <option>14</option>
                <option>15</option>
                <option>16</option>
                <option>17</option>
                <option>18</option>
                <option>19</option>
                <option>20</option>
                <option>21</option>
                <option>22</option>
                <option>23</option>
                <option>24</option>
                <option>25</option>
                <option>26</option>
                <option>27</option>
                <option>28</option>
                <option>29</option>
                <option>30</option>
                <option>31</option>
            </select>
            <select name="month">
                <option value=" "></option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
                <option>6</option>
                <option>7</option>
                <option>8</option>
                <option>9</option>
                <option>10</option>
                <option>11</option>
                <option>12</option>
            </select>
            <input name="year" placeholder="Year" type="text">
        </div>
    </div>

    <div class="form-group">
        <label class="col-md-4 control-label">手机号码<span style="color:red">*</span></label>
        <div class="col-md-4 inputGroupContainer">
            <input name="phone" placeholder="(012)345-6789" class="form-control" type="text">
        </div>
    </div>
    <!-- Text input-->
    <div class="form-group">
        <label class="col-md-4 control-label">地区<span style="color:red">*</span></label>
        <div class="col-md-4 ">
            <select name="area" class="form-control selectpicker">
                <option value="">--选择你的地区--</option>
                <option>Johor</option>
            </select>
        </div>
    </div>

    <div class="form-group">
        <label class="col-md-4 control-label">城市<span style="color:red">*</span></label>
        <div class="col-md-4 inputGroupContainer">
            <input name="city" placeholder="城市" class="form-control" type="text">
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-4 control-label">住家地址<span style="color:red">*</span></label>
        <div class="col-md-4 inputGroupContainer">
            <input name="address1" placeholder="Address1" class="form-control" type="text"><br>
            <input name="address2" placeholder="Address2" class="form-control" type="text"><br>
            <input name="address3" placeholder="Address3" class="form-control" type="text">
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-4 control-label">邮政编码<span style="color:red">*</span></label>
        <div class="col-md-4 inputGroupContainer">
            <input name="zip" placeholder="邮政编码" class="form-control" type="text">
        </div>
    </div>

    <div class="form-group">
        <label class="col-md-4 ">婚姻状态<span style="color:red">*</span></label>
        <div class="col-md-4 ">
            <select name="state" class="form-control selectpicker">
                <option value=" ">Please select your state</option>
                <option>单身</option>
                <option>已婚</option>
            </select>

        </div>
    </div>
    <div class="form-group">
        <label class="col-md-4 ">性别<span style="color:red">*</span></label>
        <div class="col-md-4">
            <select name="gender" class="form-control selectpicker">
                <option value=" "></option>
                <option>男</option>
                <option>女</option>
            </select>

        </div>
    </div>
    <div class="form-group">
        <label class="col-md-4 ">种族<span style="color:red">*</span></label>
        <div class="col-md-4 ">
            <select name="race" class="form-control selectpicker">
                <option value=" "></option>
                <option>华裔</option>
                <option>印度人</option>
                <option>马来人</option>
            </select>

        </div>
    </div>
    <div class="form-group">
        <label class="col-md-4 ">宗教<span style="color:red">*</span></label>
        <div class="col-md-4 ">
            <select name="religion" class="form-control selectpicker">
                <option value=" "></option>
                <option>佛教</option>
                <option>基督教</option>
                <option>伊斯兰教</option>
                <option>印度教</option>
            </select>

        </div>
    </div>
    <div class="form-group">
        <label class="col-md-4 ">是否有驾照？<span style="color:red">*</span></label>
        <div class="col-md-4 ">
            <select name="driving_licence" class="form-control selectpicker">
                <option value=" "></option>
                <option>是</option>
                <option>否</option>
            </select>
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-4 ">驾照的等级</label>
        <div class="col-md-4 ">
            <select name="driving_licence_class" class="form-control selectpicker">
                <option value=" "></option>
                <option>B</option>
                <option>B1</option>
                <option>B2</option>
                <option>C</option>
            </select>
        </div>
    </div>


    </div>

    <div >
        <label for="pic_nric">NRIC photo:</label>
        <input type="file" name="pic_nric"   id="pic_nric">
    </div>
    <div >
        <label for="pic_lesen">Licence photo:</label>
        <input type="file" name="pic_lesen"   id="pic_lesen">
    </div>


    <button type="submit">submit</button>
</form>
