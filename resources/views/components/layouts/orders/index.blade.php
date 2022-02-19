<x-master>
    <x-elements.breadcrumb>
        <x-slot name="title">
            Orders
        </x-slot>
        <li class="breadcrumb-item"><a href="#">Orders</a></li>
        <li class="breadcrumb-item active">Orders</li>
    </x-elements.breadcrumb>
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <a class="btn btn-primary" href={{ route("orders.create") }}>Create</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <x-partials.table></x-partials.table>
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