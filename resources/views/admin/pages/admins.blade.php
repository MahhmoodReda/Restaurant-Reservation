@extends('admin.layouts.adminLayout')

@section('body')
    <div class="card-body">
        <h4 class="card-title">Admins Table</h4>
        <div class="table-responsive">
            @if (session()->has('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div>
            @endif

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Admin</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Action</th>
                    </tr>
                </thead>
                @foreach ($authors as $author)
                    <tbody>
                        <tr>
                            <td>{{ $author->name }}</td>
                            <td>{{ $author->email }}</td>
                            <td>{{ $author->phone }}</i></td>
                            <td>

                                <form action="{{ url("/delete/$author->id") }}" method="post">
                                    @csrf
                                    <button type="submit" class="badge badge-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    </tbody>
                @endforeach

            </table>
        </div>
    </div>
@endsection
