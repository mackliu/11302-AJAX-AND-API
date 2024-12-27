<?php include_once  "./api/db.php";

$row=$Stu->find($_GET['id']);

?>

<!-- Modal -->
<div class="modal fade" id="EditModal" tabindex="-1" aria-labelledby="EditModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
    <form action="#" method="post">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="EditModalLabel">新增學生</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="mb-3">
          <label for="uni_id" class="form-label">學號</label>
          <input type="text" name="uni_id" class="form-control" id="uni_id" value="<?=$row['uni_id']?>">
      </div>
      <div class="mb-3">
          <label for="seat_num" class="form-label">座號</label>
          <input type="text" name="seat_num" class="form-control" id="seat_num"  value="<?=$row['seat_num']?>">
      </div>
      <div class="mb-3">
          <label for="name" class="form-label">姓名</label>
          <input type="text" name="name" class="form-control" id="name"  value="<?=$row['name']?>">
      </div>
      <div class="mb-3">
          <label for="classroom" class="form-label">班級</label>
          <input type="text" name="classroom" class="form-control" id="classroom"  value="<?=$row['classroom']?>">
      </div>
      <div class="mb-3">
          <label for="major" class="form-label">科系</label>
          <input type="text" name="major" class="form-control" id="major"  value="<?=$row['major']?>">
      </div>
      <input type="hidden" name="id" value="<?=$row['id']?>">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id='send'>編輯</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">關閉</button>
      </div>
    </form>
    </div>
  </div>
</div>
<script>

$("#send").on("click",function(){
   let formData={
    'uni_id':$("#uni_id").val(),
    'seat_num':$("#seat_num").val(),
    'name':$("#name").val(),
    'classroom':$("#classroom").val(),
    'major':$("#major").val(),
    'id':$("#id").val()
   }

   $.post("api/update.php",formData,function(){
      getClasses()
      alert("編輯完成")
      CreateModal.hide();
      CreateModal.dispose();
      $("#modal").html("");

   })
   //console.log(formData);
})


</script>