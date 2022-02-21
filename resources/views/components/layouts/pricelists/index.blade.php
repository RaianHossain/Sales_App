<x-master>
  <x-elements.breadcrumb>
      <x-slot name="title">
          Pricelist
      </x-slot>
      <li class="breadcrumb-item"><a href="#">Product</a></li>
      <li class="breadcrumb-item active">Pricelist</li>
  </x-elements.breadcrumb>
<section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <a class="btn btn-primary" href={{ route("pricelist.create") }}>Create</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                {{-- Pricelist Table goes here --}}

                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Pricelist Name</th>
                    <th>Discounted Percentage</th>
                    <th>Minimum order</th>
                    
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>Exclusive Customer</td>
                    <td>10</td>
                    <td>100</td>
                  </tr>
                  <tr>
                    <td>Commercial Customer</td>
                    <td>8</td>
                    <td>80</td>
                  </tr>
                  <tr>
                    <td>New Customer</td>
                    <td>5</td>
                    <td>50</td>
                  </tr>
                  
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Pricelist Name</th>
                    <th>Currency</th>
                   
                  </tr>
                  </tfoot>
                </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->

          
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </section>
</x-master>