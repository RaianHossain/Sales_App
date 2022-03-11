<x-master>
    <x-elements.breadcrumb>
        <x-slot name="title">
            User Profiles
        </x-slot>
        {{-- <li class="breadcrumb-item"><a href="#">Profiles</a></li> --}}
        <li class="breadcrumb-item active">Profiles</li>
    </x-elements.breadcrumb>

    <section class="content">
        <div class="container-fluid">

            @if (session('message'))
                <div class="alert alert-success">
                    <span class="close" data-dismiss="alert">&times;</span>
                    <strong>{{ session('message') }}.</strong>
                </div>
            @endif

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <a class="btn btn-primary" href={{ route('profiles.create') }}>Create</a>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            {{-- customer Table goes here --}}

                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone Number</th>
                                        <th>Address</th>
                                        <th>Picture</th>
                                        <th>Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($profiles as $profile)
                                        <tr>
                                            
                                            <td>{{ $profile->user_name }}</td>
                                            <td>{{ $profile->user_email }}</td>
                                            <td>{{ $profile->user_phone }}</td>
                                            <td>{{ $profile->user_address }}</td>
                                            <td>{{ $profile->user_picture }}</td>
                                            
                                            <td>
                                                <a class="btn btn-primary"
                                                    href={{ route('profiles.edit', $profile->id) }}>Edit</a>
                                                    
                                                
                                                <form action={{ route('profiles.destroy', $profile->id) }}
                                                    method="POST" class="d-inline">
                                                    @csrf
                                                    @method("DELETE")
                                                    <button class="btn btn-danger" type="submit">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach


                                </tbody>

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
