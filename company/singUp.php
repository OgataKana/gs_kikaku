<?php require 'header.php'; ?>
<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->

<div class="jumbotron">
  <fieldset>
    <form>
      <!-- ajaxの関数を使って飛ばす -->
    <legend id="free">COMPANY SingUP!</legend>
    <!-- ajaxはidをふる -->

        <label>企業名<input type="text" name="co_name"></label><br>
        <label>担当者名<input type="text" id="a_name"></label><br>
        <label>TEL<input type="" id="co_tel"></label><br>
        <label>MAIL<input type="text" id="co_mail"></label><br>
        <label>郵便番号<input type="text" id="co_addnum"></label><br>
        <label>住所<input type="text" id="co_add"></label><br>
        <label>分類<p><!-- レディース／メンズ／キッズ チェックBOX-->
            <input type="checkbox" id="co_type" value="1" checked="checked">women
            <input type="checkbox" id="co_type" value="2">men
            <input type="checkbox" id="co_type" value="3">kids</p></label><br>


        <label>ジャンル<p><!-- カジュアル／きれいめ／ドレッシー／スポーティ、、、 チェックBOX-->
            <input type="checkbox" id="co_genre" value="1" checked="checked" style="font-size:5px;">１０代
            <input type="checkbox" id="co_genre" value="2">２０代
            <input type="checkbox" id="co_genre" value="3">３０代
            <input type="checkbox" id="co_genre" value="4">４０代以上<br>
            <input type="checkbox" id="co_genre" value="5">カジュアル
            <input type="checkbox" id="co_genre" value="6">オフィス
            <input type="checkbox" id="co_genre" value="7">ガーリー
            <input type="checkbox" id="co_genre" value="8">ストリート
            <input type="checkbox" id="co_genre" value="9">スポーティ
            <input type="checkbox" id="co_genre" value="10">その他</p></label><br>
        <label>パスワード<input type="passward" id="co_pass"></label><br>
    </form>
    <button id="btn">登録</button><input type="reset" value="リセット">
  </fieldset>
</div>

<!-- Main[End] -->

    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script>
        document.querySelector("#btn").onclick = function() {
            $.ajax({
                type: "post",
                url: "insert.php",
                data: {
                    co_name: $("#name").val(),
                    a_name:$("#a_name").val(),
                    co_tel:$("#co_tel").val(),
                    co_mail:$("#co_mail").val(),
                    co_addnum:$("#co_addnum").val(),
                    co_add:$("#co_add").val(),
                    co_type:$("#co_type").val(),
                    co_genre:$("#co_genre").val(),
                    co_pass:$("#co_pass").val(),

                },
                dataType: "html",
                success: function(data) {
                  if(data=="false"){
                    alert("エラー");
                  }else{
                    $("#name").val(""),
                    $("#a_name").val(""),
                    $("#co_tel").val(""),
                    $("#co_mail").val(""),
                    $("#co_addnum").val(""),
                    $("#co_add").val(""),
                    $("#co_type").val(""),
                    $("#co_genre").val(""),
                    $("#co_pass").val(""),

                    $("#free").html("登録成功しました");

                    // 登録完了したら空っぽになる
                  }
                }
            });
        }
    </script>

</body>
</html>
