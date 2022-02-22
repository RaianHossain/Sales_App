<x-master>
    <x-elements.breadcrumb>
        <x-slot name="title"><b>
            Orders to upsell
        </b>
        </x-slot>
        <li class="breadcrumb-item"><a href="#">Orders</a></li>
        <li class="breadcrumb-item active">Order To Upsell</li>
    </x-elements.breadcrumb>
<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title"><i>order to upsell</i></h3>

          <div class="card-tools">
            <div class="input-group input-group-sm" style="width: 150px;">
              <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

              <div class="input-group-append">
                <button type="submit" class="btn btn-default">
                  <i class="fas fa-search"></i>
                </button>
              </div>
            </div>
          </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0" style="height: 300px;">
          <table class="table table-head-fixed text-nowrap">
            <thead>
              <tr>
                <th>Name</th>
                <th>Order Date</th>
                <th>Customer</th>
                <th>Sales Person</th>
                <th>Total</th>
                <th>Invoice Status</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Shovon</td>
               
                <td>
{{-- <input type="date" id="start" name="trip-start"
       value="2018-07-22"
       min="2021-01-01" max="2050-12-31"> --}}
                12/02/2022
                
                </td>
                <td>Komol</td>
                <td><span class="tag tag-success">1900</span></td>
                <td>1900</td>
                <td>Nothing To Invoice</td>
              </tr>
             
         
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
  </div>
</x-master>