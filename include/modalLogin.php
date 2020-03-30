
<!-- Modal -->
<div class="modal fade" id="modal-login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <?php include("formLogin.php")?>
      </div>
      <div class="modal-footer">
        <button type="button" id="btn-valid-modal" class="btn btn-secondary" data-dismiss="modal">Valider</button>
        <button type="button" class="btn btn-primary btn-modal" data-dismiss="modal">close</button>
      </div>
    </div>
  </div>
</div>