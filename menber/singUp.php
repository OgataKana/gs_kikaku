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

        <label>本名(非公開)<input type="text" name="m_name"></label><br>
        <label>ニックネーム<input type="text" id="f_name"></label><br>
        <label>TEL<input type="" id="m_tel"></label><br>
        <label>MAIL<input type="text" id="m_mail"></label><br>
        <label>郵便番号<input type="text" id="m_addnum"></label><br>
        <label>住所<input type="text" id="m_add"></label><br>
        <label>分類<p><!-- レディース／メンズ／キッズ チェックBOX-->
            <input type="checkbox" id="m_type" value="1" checked="checked">women
            <input type="checkbox" id="m_type" value="2">men
            <input type="checkbox" id="m_type" value="3">kids</p></label><br>


        <label>ジャンル<p><!-- カジュアル／きれいめ／ドレッシー／スポーティ、、、 チェックBOX-->
            <input type="checkbox" id="m_genre" value="1" checked="checked" style="font-size:5px;">１０代
            <input type="checkbox" id="m_genre" value="2">２０代
            <input type="checkbox" id="m_genre" value="3">３０代
            <input type="checkbox" id="m_genre" value="4">４０代以上<br>
            <input type="checkbox" id="m_genre" value="5">カジュアル
            <input type="checkbox" id="m_genre" value="6">オフィス
            <input type="checkbox" id="m_genre" value="7">ガーリー
            <input type="checkbox" id="m_genre" value="8">ストリート
            <input type="checkbox" id="m_genre" value="9">スポーティ
            <input type="checkbox" id="m_genre" value="10">その他</p></label><br>
        <label>パスワード<input type="passward" id="m_pass"></label><br>
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
                    m_name: $("#m_name").val(),
                    f_name:$("#f_name").val(),
                    m_tel:$("#m_tel").val(),
                    m_mail:$("#m_mail").val(),
                    m_addnum:$("#m_addnum").val(),
                    m_add:$("#m_add").val(),
                    m_type:$("#m_type").val(),
                    m_genre:$("#m_genre").val(),
                    m_pass:$("#m_pass").val(),

                },
                dataType: "html",
                success: function(data) {
                  if(data=="false"){
                    alert("エラー");
                  }else{
                    $("#m_name").val(""),
                    $("#f_name").val(""),
                    $("#m_tel").val(""),
                    $("#m_mail").val(""),
                    $("#m_addnum").val(""),
                    $("#m_add").val(""),
                    $("#m_type").val(""),
                    $("#m_genre").val(""),
                    $("#m_pass").val(""),

                    $("#free").html("登録成功しました");

                    // 登録完了したら空っぽになる
                  }
                }
            });
        }
    </script>

</body>
</html>
