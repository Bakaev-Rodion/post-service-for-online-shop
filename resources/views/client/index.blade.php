<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Package and client Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif
<div class="container mt-2">
<form action="{{ route('create') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <strong>Package:</strong>
            <div class="form-group">
                Width (cm):
                <input type="number" step="0.01" name="width" class="form-control">
                @error('width')
                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                Height (cm):
                <input type="number" step="0.01" name="height" class="form-control">
                @error('height')
                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                Length (cm):
                <input type="number" step="0.01" name="length" class="form-control">
                @error('length')
                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                Weight (kg):
                <input type="number" step="0.01" name="weight" class="form-control">
                @error('weight')
                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <strong>Receiver:</strong>
            <div class="form-group">
                Full name:
                <input type="text" name="full_name" class="form-control">
                @error('full_name')
                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                Phone number:
                <input type="text" name="phone_number" class="form-control">
                @error('phone_number')
                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                Email:
                <input type="email" name="email" class="form-control">
                @error('length')
                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                Address:
                <input type="text" name="address" class="form-control">
                @error('address')
                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Select post company:</strong>
                <select class="form-select" name="post" aria-label="Default select example">
                    @foreach($posts as $post)
                        <option value="{{$post['id']}}">{{$post['post_name']}}</option>
                    @endforeach
                </select>
                @error('post')
                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <button type="submit" class="btn btn-primary ml-3">Submit</button>
    </div>
</form>
</div>
</body>

</html>
