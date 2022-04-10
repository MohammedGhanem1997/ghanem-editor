@extends('admin.layout.main')
@include('admin.layout.sidebar')


@section('content')
    <div class="search">
{{--        <form action="{{route('admin.search-user')}}" method="get">--}}
{{--            @csrf--}}
{{--            <input name="search" type="text" class="input" placeholder="Search....">--}}
{{--            <button type="submit" class="btn">--}}
{{--                <i class="fas fa-search"></i>--}}
{{--            </button></form>--}}
    </div>
    <div class="container">
        <div class="row">
            <table class="table table-striped table-hover">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">{{__('user name')}} </th>
                    <th scope="col">{{__('email')}} </th>
                    <th scope="col">{{__('created at')}}</th>
                    <th scope="col">{{__('transaction')}} </th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    @foreach ( \App\Models\User::where('admin','<>',1)->get() as $user )

                        <th scope="row">1</th>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->created_at }}</td>
                        <td>

                            <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#email{{$user->id}}" href="#"> {{__('send email')}}</a>
                            <a class="btn btn-success" href=" {{route('admin.user.edit',$user->id) }}"> {{__('edit')}} </a>
                            <a class="btn btn-info" href=" {{route('admin.user.show',$user->id) }}"> {{__('show')}} </a>
                            <a class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete{{$user->id}}"> {{__('delete')}} </a>






                        </td>
                </tr>



                <div class="modal fade" id="delete{{$user->id}}" tabindex="-2" aria-labelledby="exampleModalLabel2" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">do you want delete this user </h5>
                            </div>

                            <a class="btn btn-danger" href=" {{route('admin.user.delete',$user->id) }}"> {{__('delete')}} </a>

                        </div>
                    </div>
                </div>





                <div class="modal fade" id="email{{$user->id}}" tabindex="-2" aria-labelledby="exampleModalLabel2" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">you can send email to {{$user->name}}</h5>
                            </div>

                            <form method="POST" action="{{route('admin.user.send-email') }}">
                                @csrf
                                <div class="modal-body">
                                    <input type="hidden" class="form-control" value="{{$user->email}}" name="email" >

                                    <div class="input-group mb-3">
                                        <span class="input-group-text"><i class="fas fa-user-edit"></i></span>
                                        <input type="text" class="form-control" name="name" placeholder="your name" aria-label="Username" aria-describedby="basic-addon1">
                                    </div>

                                    <div class="input-group mb-3">
                                        <span class="input-group-text"><i class="fas fa-pen"></i></span>
                                        <input type="text" class="form-control"  name="title"placeholder=" titel" aria-label="Username" aria-describedby="basic-addon1">
                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="fas fa-message"></i></span>
                                        <textarea  name="message" class="form-control" placeholder="  containt " aria-label="With textarea"></textarea>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-dark ">send</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                @endforeach

                </tbody>
            </table>
        </div>

    </div>



@endsection
