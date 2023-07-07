@extends('admin.layouts.adminLayout')


@section('body')
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card corona-gradient-card">
                <div class="px-0 py-0 card-body px-sm-3">
                </div>
            </div>
        </div>
    </div>
    <div class="row">


            <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="text-center">
                                <a href="{{ route('createAuthor') }}">
                                <h3>Add New Admin</h3>
                            </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="text-center">
                            <a href="{{ route('add-menu') }}">

                                <h3>Add To Menu</h3>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="text-center">
                            <a href="{{ route('show-menu') }}">
                            <h3>Show Menu</h3>
                        </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="text-center">
                            <a href="{{ route('authors') }}">
                                <h3>Show Authors</h3>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
    <div class="card-body">
        <h4 class="card-title">Reservations Table</h4>
        <div class="table-responsive">
            @if (session()->has('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div>
            @endif

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Date</th>
                        <th>Guests</th>
                        <th>Message</th>
                        <th>status</th>
                    </tr>
                </thead>
                @foreach ($reservations as $reservation)
                    <tbody>
                        <tr>
                            <td>{{ $reservation->name }}</td>
                            <td>{{ $reservation->email }}</td>
                            <td>{{ $reservation->phone }}</td>
                            <td>{{ $reservation->date }}</td>
                            <td>{{ $reservation->count }}</td>
                            <td>{{ $reservation->message }}</td>

                            <td>

                                <form action="{{ url("/confirm/$reservation->id") }}" method="post">
                                    @csrf
                                    @if ($reservation->status == 1 )
                                    <button type="submit" class="badge badge-danger">Confirm</button>
                                    @else
                                    <button type="submit" class="badge badge-success" disabled>Confirmed</button>
                                    @endif
                                </form>
                            </td>
                        </tr>
                    </tbody>
                @endforeach

            </table>
        </div>
    </div>
@endsection
