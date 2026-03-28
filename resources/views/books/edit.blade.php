<!DOCTYPE html>
<html>
<head>
    <title>Edit Book</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">

            <div class="card shadow">
                <div class="card-body">

                    <h3 class="mb-4">Edit Book</h3>

                    <form method="POST" action="/books/{{ $book->id }}">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <input type="text" name="title" value="{{ $book->title }}" class="form-control">
                        </div>

                        <div class="mb-3">
                            <input type="text" name="author" value="{{ $book->author }}" class="form-control">
                        </div>

                        <div class="mb-3">
                            <input type="number" name="year_published" value="{{ $book->year_published }}" class="form-control">
                        </div>

                        <button type="submit" class="btn btn-primary w-100">Update</button>
                        <a href="/books" class="btn btn-secondary w-100 mt-2">Back</a>

                    </form>

                </div>
            </div>

        </div>
    </div>
</div>

</body>
</html>
