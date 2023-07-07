@extends('admin.layouts.adminLayout')

@section('body')

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