<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Order Form</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method ="POST" action="/">
            <div class="form-group">
             <label for="name">Name</label>
        <input type="text" class="form-control" name="name" placeholder="Enter Full Name">
  </div>
  <div class="form-group">
    <label for="address">Adress</label>
    <input type="text" class="form-control"   name ="address" placeholder="Address">
  </div>
  <div class="form-group">
    <label for="phonenumber">Phone Number</label>
    <input type="number" class="form-control" name="phonenumber" placeholder="Phone Number">
  </div>
  <div class="form-group">
    <label for="menu">Phone Number</label>
    <input type="number" class="form-control"  name="menu" placeholder="Quantity">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
      </div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div> -->
    </div>
  </div>
</div>