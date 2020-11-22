<?php include __DIR__ . '/../parts/config.php' ?>
<?php include __DIR__ . '/../parts/html-head.php' ?>
<!-- --- css 連結放下面 ----- -->
<link rel="stylesheet" href="errorpassword.css">

<?php include __DIR__ . '/../parts/html-navbar.php' ?>
<!-- ------------------ body開始 以上勿刪 ------------------ -->
<div class="container mt-5">

  <h1 class="orange-color t-xxxl bg-color ">Hello!開始開心寫網站 orange-color t-xxxl bg-color</h1>
  <br>
  <h6 class="brown-color t-xxl ">毛日 brown-color t-xxl</h6>
  <br>
  <h6 class="green-color t-xl">毛日 green-color t-xl</h6>
  <br>
  <h6 class="danger-color t-l">毛日 danger-color t-l</h6>
  <br>
  <h6 class="text-color t-m">毛日 text-color t-m</h6>
  <br>
  <h6 class="text-color t-s">毛日 text-color t-s</h6>
  <br>
  <h6 class="text-gray t-xs">毛日 text-gray t-xs</h6>

  <button class="btn">測試 class='btn'</button>

</div>

<!-- Model -->
<div class="container">
  <div class="row">
    <div class="login">
      <button data-dismiss="modal" class="close" >
        <span aria-hidden="true">×</span>
      </button>

      <form class="login-form">
        <h2 class="t-xl">重設密碼</h2>
        <h2 class="t-m" style="line-height:24px;">輸入您當初註冊的電子信箱<br>我們會發送重設密碼的連結給您</h2>

        <div class="login-group">
          <!-- <label for="account">帳號</label> -->
          <input type="text" class="form-control" id="account" name="account" placeholder="電子信箱">
        </div>

        <div class="login-group-2">
          <button class="login-btn btn">重新寄出驗證信</button>
        </div>

        <div class="login-other">
          <a href="user-login.php">Petliday會員登入</a>
          <span>｜</span>
          <a href="login-petliday.php">免費註冊</a>
        </div>

      </form>
    </div>
  </div>
</div>

<dialog></dialog>

<!-- 範例 -->






<!-- ------------------ body結束 ------------------ -->
<?php include __DIR__ . '/../parts/html-footer.php' ?>
<!-- ---------------js/jq 開始 ------------------ -->
<?php include __DIR__ . '/../parts/html-script.php' ?>
<script>
  // ------JS開始 以上勿刪-------



  // ------JS結束 勿刪到-------
</script>
<?php include __DIR__ . '/../parts/html-foot.php' ?>