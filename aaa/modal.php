<?php
require "connect.php";
?>
<!-- Модальное окно -->
<div class="modal" id="myModal<?= $ID ?>">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Описание книги</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <?php
        $qu = mysqli_fetch_assoc(mysqli_query($connect, "SELECT * FROM bookid WHERE id = '$ID'"));
        $bookID = $qu['bookID'];
        $dsc = mysqli_fetch_assoc(mysqli_query($connect, "SELECT * FROM book WHERE bookID = '$bookID'"));
        $dsc = $dsc['description']
        ?>
        <p>
          <?= $desc ?>
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Закрыть</button>
      </div>

    </div>
  </div>
</div>
<script src="/js/sort.js"></script>