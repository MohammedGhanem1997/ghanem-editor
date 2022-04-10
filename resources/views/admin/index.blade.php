@extends('admin.layout.main')
@include('admin.layout.sidebar')


@section('content')

<div id="app">
<advartise></advartise>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-3 mb-4">
            <div class="card-admin-dash text-white bg-dark mb-3" style="max-width: 18rem;">
                <div class="card-header-admin-dash"><i class="fas fa-building"></i> number of images </div>
                <div class="card-body-admin-dash">
                    <h5 class="card-title"><span class="car-span"></span> {{\App\Models\Gallery::all()->count()}} </h5>
                    <div class="col-md-12">
                        <a class="btn btn-outline-light d-grid gap-2 car-but" href=""></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-3 mb-4">
            <div class="card-admin-dash text-white bg-success mb-3" style="max-width: 18rem;">
                <div class="card-header-admin-dash"><i class="fas fa-table"></i> number of folders  </div>
                <div class="card-body-admin-dash">
                    <h5 class="card-title"><span class="car-span"></span> {{\App\Models\Folder::all()->count()}} </h5>
                    <div class="col-md-12">
                        <a class="btn btn-outline-light d-grid gap-2 car-but" href=""></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-3 mb-4">
            <div class="card-admin-dash text-white bg-danger mb-3" style="max-width: 18rem;">
                <div class="card-header-admin-dash"><i class="fas fa-users"></i> number of users </div>
                <div class="card-body-admin-dash">
                    <h5 class="card-title"><span class="car-span"></span> {{\App\Models\User::where('admin','<>',1)->get()->count()}} </h5>
                    <div class="col-md-12">
                        <a class="btn btn-outline-light d-grid gap-2 car-but" href=""></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-3 mb-4">
            <div class="card-admin-dash text-white bg-info mb-3" style="max-width: 18rem;">
                <div class="card-header-admin-dash"><i class="fab fa-buysellads"></i> number of admins  </div>
                <div class="card-body-admin-dash">
                    <h5 class="card-title"><span class="car-span"></span> {{\App\Models\User::where('admin',1)->get()->count()}} </h5>
                    <div class="col-md-12">
                        <a class="btn btn-outline-light d-grid gap-2 car-but" href=""></a>
                    </div>
                </div>
            </div>
        </div>








    </div>
</div>



@endsection
