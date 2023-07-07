@extends('admin.layouts.adminLayout')

@section('body')
    <div class="container">
        @if (session()->has('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div>
        @endif
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="card-body">
            <h4 class="card-title">ADD NEW ITEM</h4>
            <br>
            <br>
            <form class="forms-sample" action="{{ route('insert-menu') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="category">Category</label>
                    <select class="form-control form-control-sm" id="category" name="category">
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="title">
                </div>
                <div class="form-group">
                    <label for="desc">Description</label>
                    <input type="text" class="form-control" id="desc" name="desc" placeholder="desc" max="500">
                </div>
                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="price" class="form-control" id="price" name="price" placeholder="price">
                </div>
                <div class="form-group">
                    <label>File upload</label>
                    <input type="file" name="image" id="image" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary me-2">Submit</button>

            </form>
        </div>
    </div>
@endsection
