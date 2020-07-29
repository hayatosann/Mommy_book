<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/CSS/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('/assets/css/style.css')}}">

    <title>親御様のプロフィールご登録</title>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2 class="title">親御様のプロフィールご登録</h2>
          <form>
            <div class="form-group">
              <label>お名前</label>
              <input type="text" class="form-control" placeholder="お名前（ニックネーム）">
            </div>
            <div class="form-group">
              <label>性別</label>
              <div class="button">
                <a href="#" class="">女性</a>
                <a href="#" class="">男性</a>
                <a href="#" class="">no coment</a>
              </div>
            </div>
            <div class="form-group">
              <label>お住まいのエリア</label>
              <input type="text" class="mb-2 form-control" placeholder="郵便番号">
              <input type="text" class="form-control" placeholder="自動入力">
            </div>
            <div class="form-group">
              <label>ご生年月日</label>
              <input type="text" class="form-control" width="200px" placeholder="カレンダー" id="datepicker" />
            </div>
            <div class="form-group">
              <label>eメールアドレス</label>
              <input type="email" class="form-control" placeholder="email">
            </div>
            <div class="form-group">
              <label>パスワード（８桁以上で設定ください）</label>
              <input type="password" class="form-control" placeholder="パスワード">
            </div>
            <div class="login">
              <a href="confirm.html" class="btn-flat-border">入力完了</a>
            </div>
          </form>
          
        </div>
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script
  src="https://code.jquery.com/jquery-2.2.4.min.js"
  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
  crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
    <script>
      $('#datepicker').datepicker({
          uiLibrary: 'bootstrap4'
      });
  </script>
  </body>

</html>