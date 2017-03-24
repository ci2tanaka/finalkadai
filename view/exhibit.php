<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./lib/style.css">
    <title>ME-market</title>

    <script type="text/javascript">
    document.addEventListener("load", function(event) {
      var fileArea = document.getElementById('drag-drop-area');
     var fileInput = document.getElementById('fileInput');

  fileArea.addEventListener('dragover', function(evt){
    evt.preventDefault();
    fileArea.classList.add('dragover');
  });

  fileArea.addEventListener('dragleave', function(evt){
      evt.preventDefault();
      fileArea.classList.remove('dragover');
  });
  fileArea.addEventListener('drop', function(evt){
      evt.preventDefault();
      fileArea.classList.remove('dragenter');
      var files = evt.dataTransfer.files;
      fileInput.files = files;
  });
  });
    </script>
  </head>
  <body>
    <header>
      <div class="header-box">
          <a href="./">
              <img class="logo" src="./lib/ME-market-logo.png" alt="CodeSHOP">
          </a>
    </header>
    <div class="content-container">
    <div class="content">
      <div class="exhibit_header">
        <h2>商品情報を入力</h2>
      </div>
      <div class="exhibit_form">
        <form action="exhibit.php" method="post" enctype="multipart/form-data">
          <div class="exhibit_img">
            <div id="drag-drop-area">
             <div class="drag-drop-inside">
             <p class="drag-drop-info">ここにファイルをドロップ</p>
             <p>または</p>

             <p class="drag-drop-buttons"><input id="fileInput" type="file" value="ファイルを選択" name="new_img"></p>
            </div>
          </div>
          </div>
          <div class="exhibit_name">
            <p class="exhibit_item">
              商品名称
            </p><br><input type="text" name="name" value="">
          </div>
          <div class="exhibit_department">
            <p class="exhibit_item">カテゴリー</p>
            <br><select name="department">
            <option value="内視鏡外科">内視鏡外科</option>
            <option value="脳外科">脳外科</option>
            <option value="心臓血管外科">心臓血管外科</option>
          </select><br>
          </div>
          <div class="exhibit_price">
            <p class="exhibit_item">値段</p>
            <input type="text" name="price"><br>
          </div>
          <div class="exhibit_stock">
            <p class="exhibit_item">個数</p><input type="text" name="stock"><br>

          </div>
          <div class="exhibit_submit">
            <input type="submit" name="submit" value="出品する">
          </div>

        </form>
      </div>

    </div>
    </div>
  </body>
</html>
