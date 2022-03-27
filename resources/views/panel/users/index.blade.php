@extends('panel.index')

@section('breadcrumb')
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-themecolor">users</h3>
        </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">خانه</a></li>
                <li class="breadcrumb-item active">داشبورد</li>
            </ol>
        </div>
    </div>
@endsection

@section('context')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">تماس با لیست کارکنان</h4>
                    <h6 class="card-subtitle"></h6>
                    <div class="table-responsive">
                        <table id="demo-foo-addrow" class="table m-t-30 table-hover contact-list" data-page-size="10">
                            <thead>
                            <tr>
                                <th>شماره</th>
                                <th>نام</th>
                                <th>ایمیل</th>
                                <th>تلفن</th>
                                <th>عملیات</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <td>{{$user->id}}</td>
                                    <td>
                                        <a href="javascript:void(0)">{{$user->name}}</a>
                                    </td>
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->phone}}</td>
                                    <td>
                                        <form action="{{ route('users.destroy',['user'=>$user->id]) }}" method="post">
                                            @method('delete')
                                            @csrf
                                            <input class="btn btn-danger" type="submit" value="Delete" />

                                        </form>

                                       <button class="btn btn-success">
                                           <a href="{{ route('users.edit',$user->id) }}"
                                              >update</a>
                                       </button>




                                    </td>
                                </tr>
                            @endforeach

                            </tbody>

                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
