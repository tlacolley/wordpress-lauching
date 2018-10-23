
<!-- Button trigger modal -->
<div class=" text-center">
<button type="button" class="btn_mail " data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Mail</button>

</div>

<!-- Modal  -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New message</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

         <form id="formMail" action="." method="post" >
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Your name:</label>
            <input type="text" class="form-control" id="recipient-name" name="inputName">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Your mail:</label>
            <input type="mail" class="form-control" id="recipient-mail" name="inputMail" value="">
          </div>

      </div>

      <div class="modal-footer">
          <?php echo apply_filters( 'gglcptch_display_recaptcha', '' ); ?>
        <button type="button" class="btn_close" data-dismiss="modal">Close</button>
        <button type="submit" class="btn_mail">Send message</button>
      </div>
  </form>
    </div>
  </div>
</div>
