

<!-- Modal -->
<div class="modal fade" id="CreateModal" tabindex="-1" aria-labelledby="CreateModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
    <form action="api/create.php" method="post">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="CreateModalLabel">新增學生</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="mb-3">
          <label for="uni_id" class="form-label">學號</label>
          <input type="text" class="form-control" id="uni_id" >
      </div>
      <div class="mb-3">
          <label for="seat_num" class="form-label">座號</label>
          <input type="text" class="form-control" id="seat_num" >
      </div>
      <div class="mb-3">
          <label for="name" class="form-label">姓名</label>
          <input type="text" class="form-control" id="name" >
      </div>
      <div class="mb-3">
          <label for="classroom" class="form-label">班級</label>
          <input type="text" class="form-control" id="classroom" >
      </div>
      <div class="mb-3">
          <label for="major" class="form-label">科系</label>
          <input type="text" class="form-control" id="major" >
      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">關閉</button>
        <button type="submit" class="btn btn-primary">儲存</button>
      </div>
    </form>
    </div>
  </div>
</div>