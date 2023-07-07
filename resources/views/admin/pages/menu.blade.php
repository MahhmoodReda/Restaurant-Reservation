@extends('admin.layouts.adminLayout')

@section('body')

    <div class="card-body">
        @if (session()->has('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div>
@endif
        <h4 class="card-title">MENU</h4>
        <div class="table-striped">
            <table class="text-center " >

                <thead>
                    <tr>
                        <th style="width:10%">Image</th>
                        <th style="width:25%">Title</th>
                        <th style="width:30%">Desc</th>
                        <th style="width:15%">Price</th>
                        <th style="width:10%">Status</th>
                        <th style="width:10%">Update</th>
                    </tr>
                </thead>
                @foreach($menus as $menu)

                <tbody>
                    <tr>
                        <td ><img src="{{ asset("storage/$menu->image") }}" alt="" width="100%"></td>
                        <td>{{ $menu->title }}</td>
                        <td>{{ $menu->desc }}</td>
                        <td>{{ $menu->price }}</td>
                        <td>

                            <form action="{{ url("/active-item/$menu->id") }}" method="post">
                                @csrf
                                @if ($menu->is_active == 1 )
                                <button type="submit" class="badge badge-danger">OFF</button>
                                @else
                                <button type="submit" class="badge badge-success">ON</button>
                                @endif
                            </form>
                        </td>
                        <td>
                            <form action="{{ url("/update-item/$menu->id") }}" method="get">
                                @csrf

                                <button type="submit" class="badge badge-danger">edit</button>

                            </form>
                        </td>
                    </tr>
                </tbody>
                @endforeach

            </table>
        </div>
    </div>
@endsection
