<x-master>

    <!-- <div class="row">
        <div class="col-md-10 offset-md-12">
            <div class="col-3">
                <div class="form-group">
                    <label>Order By:</label>
                    <select class="select2" style="width: 100%;">
                        <option selected>Title</option>
                        <option>Date</option>
                    </select>
                </div>
            </div>

    </div>
    </div> -->

    <x-elements.breadcrumb>
      <x-slot name="title">
          Products
      </x-slot>
      <li class="breadcrumb-item"><a href="#">Product</a></li>
      <li class="breadcrumb-item active">Products</li>
  </x-elements.breadcrumb>

{{-- end --}}
<section class="content">
    <div class="container-fluid">
    <a href={{ route("products.create") }} class="btn btn-primary mb-2">Create</a>
    <div class="row">
        @foreach ($products as $product)
        <div class="col-md-3">
            <div class="card">
            <div class="card-body">
                <h5 class="card-title"><b>{{ $product->name }}</b></h5><br>
                <small class="card-text" style="font-size: 15px;">Price: {{ $product->price }}</small><br>
                <small class="card-text" style="font-size: 15px;">Per Box: {{ $product->box_quantity }}</small><br>
                <small class="card-text" style="font-size: 15px;">Quantity: {{ $product->quantity }}</small><br>
                <a href="#" class="btn btn-primary">Details</a>
                <a href="#" class="btn btn-warning">Edit</a>
                <a href="#" class="btn btn-danger">Delete</a>
            </div>
            </div>
        </div>
        @endforeach

        <!-- <div class="col-md-3">
            <div class="card">
            <div class="card-body">
                <h5 class="card-title"><b>Maxpro 20</b></h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Details</a>
                <a href="#" class="btn btn-warning">Edit</a>
                <a href="#" class="btn btn-danger">Delete</a>
            </div>
            </div>
        </div> -->
        
        
    </div>
    </div>

    </section>

</x-master>
