<x-master>
    <x-elements.breadcrumb>
        <x-slot name="title">
            Create Pricelist
        </x-slot>
        <li class="breadcrumb-item"><a href="#">Product</a></li>
        <li class="breadcrumb-item active">Price List</li>
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
            </div>


            <div class="container-fluid">
                <div class="row m-2 p-4">
                    <div class="form-check">

                        <label class="form-check-label"><input class="form-check-input" type="radio" name="radio1"> Can
                            be Sold</label>
                    </div>

                    <div class="form-check">

                        <label class="form-check-label"> <input class="form-check-input" type="radio" name="radio1">Can
                            be Purchased</label>

                    </div>
                </div>
            </div>


            {{-- from goes here --}}

            <div class="card card-primary">

                <form>
                    <div class="card-body">


                        <div class="form-group">
                            <label for="exampleInputName1">Product Name</label>
                            <input type="name" class="form-control" id="exampleInputName1"
                                placeholder="Enter Product Name">
                        </div>

                        <div class="form-group">
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Product Type</option>
                                <option value="1">Edible</option>
                                <option value="2">Non-Edible</option>
                                <option value="3">Liquid</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Product Category</option>
                                <option value="1">Electronics</option>
                                <option value="2">Non-Edible</option>
                                <option value="3">Liquid</option>
                            </select>
                        </div>



                        <div class="form-group">

                            <div class="row">
                                <div class="col-sm-6">
                                
                                <label for="exampleInputName1">Product Price</label>
                                <input type="number" class="form-control" id="exampleInputName1"
                                    placeholder="Input Price">
                                </div>
                                <div class="col-sm-6">
                               
                                    <label for="exampleInputName1">Customer Texes</label>
                                    <input type="number" class="form-control" id="exampleInputName1"
                                        placeholder="Input Tax Amount">
                                </div>     
                                </div>

                                <div class="form-group">

                                    <div class="col-sm-3">
                                        <label for="exampleInputName1">Internal Reference</label>
                                        <input type="text" class="form-control" id="exampleInputName1"
                                            placeholder="Input Refernce Code">
                                    </div>
                                </div>

                                {{-- end --}}

                                <label for="exampleInputFile">File input</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="exampleInputFile">
                                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text">Upload</span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Check me out</label>
                            </div>
                        </div>
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
                        </div>
                </form>
            </div>




            <!-- /.card-body -->

    </form>


</x-master>


<script>
    // $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })

    $('#reservation').daterangepicker()

    //   Date picker JS
</script>
