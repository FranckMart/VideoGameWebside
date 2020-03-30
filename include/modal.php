
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Inscription</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <?php include("formInscription.php")?>
      </div>
      <div class="modal-footer">
        <button type="button" id="btn-valid-modal" class="btn btn-secondary" data-dismiss="modal">Valider</button>
        <button type="button" id="btn-log-valid" class="btn btn-primary btn-modal" data-toggle="modal" data-target="#modal-login">Login</button>
        <button type="button" class="btn btn-primary btn-modal" data-dismiss="modal">close</button>
      </div>
    </div>
  </div>
</div>