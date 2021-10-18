<div class="container-fluid">
  <button type="button" class="btn btn-primary rounded-circle" data-toggle="modal" data-target="#myModal" style="position: fixed; bottom: 30px;">
    Hòm thư 
  </button>
  <!-- The Modal -->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Hòm thư góp ý</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
            <div class="container">
                <form action="/action_page.php" class="needs-validation" novalidate>
                    <div class="form-group">
                        <input type="text" class="form-control" id="uname" placeholder="Tiêu đề" name="uname" required>
                        <div class="valid-feedback">Hợp lệ.</div>
                        <div class="invalid-feedback">Vui lòng không được bỏ trống thông tin!</div>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="pswd" id="pwd" cols="30" rows="15" placeholder="Nội dung góp ý" required></textarea>
                        <div class="valid-feedback">Hợp lệ.</div>
                        <div class="invalid-feedback">Vui lòng không được bỏ trống thông tin!</div>
                    </div>
                    <button type="submit" class="btn btn-primary" style="position: absolute; right: 30px;">Gửi góp ý</button>
                </form>
                <br>
            </div>

            <br>

            <script>
            // Disable form submissions if there are invalid fields
            (function() {
            'use strict';
            window.addEventListener('load', function() {
                // Get the forms we want to add validation styles to
                var forms = document.getElementsByClassName('needs-validation');
                // Loop over them and prevent submission
                var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                    event.preventDefault();
                    event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
                });
            }, false);
            })();
            </script>
        </div>
        
      </div>
    </div>
  </div>
  
</div>