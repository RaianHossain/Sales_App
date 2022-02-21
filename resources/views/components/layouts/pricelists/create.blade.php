<x-master>
  <x-elements.breadcrumb>
      <x-slot name="title">
          Create Pricelist
      </x-slot>
      <li class="breadcrumb-item"><a href="#">Pricelist</a></li>
      <li class="breadcrumb-item active">Pricelist</li>
      <li class="breadcrumb-item active">Create New</li>
  </x-elements.breadcrumb>


  <form>
      <div>
          <div class="row m-4">
              <div class="col-sm-6">
              <!-- text input -->
              <div class="form-group">
                  <label>Pricelist Name</label>
                  <input type="text" class="form-control" placeholder="Enter Pricelist Name:">
              </div>
              </div>

              <div class="col-sm-6">
                  <!-- select -->
                  <div class="form-group">
                    <label>Currency</label>
                    <select class="form-control">
                      <option>USD</option>
                      <option>BDT</option>
                      
                    </select>
                  </div>
                </div>
          </div>

          
          <table id="example2" class="table table-bordered table-hover">
              <thead>
              <tr>
                <th>Products</th>
                <th>Min Quantity</th>
                <th>Price(1)</th>
                <th>Offer Duration</th>
              </tr>
              </thead>
             
              <tbody>
                  <tr>
                      <th>Product 1</th>
                      <th>100 Piece</th>
                      <th>100</th>
                      <th> <div class="form-group">
                  
        
                          <div class="input-group">
                            <div class="input-group-prepend">
                              <span class="input-group-text">
                                <i class="far fa-calendar-alt"></i>
                              </span>
                            </div>
                            <input type="text" class="form-control float-right" id="reservation">
                          </div>
                          <!-- /.input group -->
                        </div></th>
                    </tr>

                  

              </tbody>

              <tfoot>
              <tr>
                  <th>Products</th>
                  <th>Min Quantity</th>
                  <th>Price(1)</th>
                  <th>Offer Duration</th>
              </tr>
              </tfoot>
            </table>

    

     
           <!-- /.card-body -->
          <div class="row m-4">
              <div class="card-footer">
              <button type="submit" class="btn btn-primary">Save</button>
              </div>
              <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Discard</button>
                  </div>
          <div class="row m-4">
      </div>
    </form>


</x-master>


<script>
      // $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })

    $('#reservation').daterangepicker()

  //   Date picker JS
</script>