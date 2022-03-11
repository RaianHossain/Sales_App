<x-master>
    <x-elements.breadcrumb>
        <x-slot name="title">
            Edit Profile
        </x-slot>
        <li class="breadcrumb-item"><a href="#">User Profile</a></li>
        <li class="breadcrumb-item active">Profiles List</li>
        <li class="breadcrumb-item active">Edit</li>
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
    {{-- <form action="{{ route('profiles.update') }}" method="post"> --}}
    <form action="{{ route('profiles.update', ['profile' => $profile->id]) }}" enctype="multipart/form-data"
        method="post">

        @csrf
        @method('patch')
        {{-- @method('patch') --}}





        {{-- <input type="hidden" name="user_id" value="{{ auth()->user()->id }}"> --}}
        <div class="card-body">
            <div class="form-group col-md-6">
                <label for="name">Name</label>
                <input type="text" name="user_name" class="form-control" placeholder="User name"
                    value="{{ old('user_name', $profile->user_name) }}">
            </div>

            <input type="hidden" name="pricelist_id" value="1">


            <div class="form-group col-md-6">
                <label for="inputEmail4">Email</label>
                <input type="email" name="user_email" class="form-control" id="inputEmail4"
                    value="{{ old('user_email', $profile->user_email) }}" placeholder="Email">
            </div>


            <div class="form-group">
                <label for="inputAddress">Address</label>
                <input type="text" name="user_address" class="form-control" id="inputAddress" placeholder="Address"
                    value="{{ old('user_address', $profile->user_address) }}">
            </div>
            <div class="form-group">
                <label for="inputAddress2">Phone</label>
                <input type="number" name="user_phone" class="form-control" id="inputAddress2" value=""
                    placeholder="Enter Your Phone Number" value="{{ old('user_phone', $profile->user_phone) }}">
            </div>

            <div class="col-sm-4">
                <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="exampleInputFile" name="user_picture">
                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                        </div>
                        <div class="input-group-append">
                            <span class="input-group-text">Upload</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>

       
    </form>


</x-master>


<script>
    // $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })

    $('#reservation').daterangepicker()

    //   Date picker JS
</script>
