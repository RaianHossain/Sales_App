<x-master>
  <x-elements.breadcrumb>
      <x-slot name="title">
          Pricelist
      </x-slot>
      <li class="breadcrumb-item"><a href="#">Product</a></li>
      <li class="breadcrumb-item active">Pricelist</li>
  </x-elements.breadcrumb>

  @if ($errors->any())
  <div class="alert alert-danger">
      <ul>
          @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
          @endforeach
      </ul>
  </div>
@endif

<section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <a class="btn btn-primary" href={{ route("pricelists.create") }}>Create</a>
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
                    <th>Actions</th>
                    
                  </tr>
                  </thead>
                  <tbody>
                  @foreach ($pricelists as $pricelist)

                    <tr>
                      <td>{{ $pricelist->name }}</td>
                      <td>{{ $pricelist->discount_percentage }}</td>
                      <td>{{ $pricelist->minimum_order }}</td>
                      <td>
                        <a class="btn btn-primary" href={{ route("pricelists.edit", $pricelist->id) }}>Edit</a>
                        <form action={{ route("pricelists.destroy", $pricelist->id) }} method="POST" class="d-inline">
                          @csrf
                          @method("DELETE")
                          <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                      </td>
                    </tr>
                  @endforeach
                  
                  
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