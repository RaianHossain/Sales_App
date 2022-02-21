<x-master>
  <x-elements.breadcrumb>
      <x-slot name="title">
          Products
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
              <a class="btn btn-primary" href={{ route("products.create") }}>Create</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                {{-- Pricelist Table goes here --}}

                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Pricelist Name</th>
                    <th>Currency</th>
                    
                  </tr>
                  </thead>
                  <tr>
                    <td>Exclusive Customer</td>
                    <td>BDT</td>
                  </tr>
                  <tr>
                    <td>Commercial Customer</td>
                    <td>BDT</td>
                  </tr>
                  <tr>
                    <td>New Customer</td>
                    <td>BDT</td>
                  </tr>
                  <tbody>
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