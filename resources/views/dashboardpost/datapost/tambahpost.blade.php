<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Form Tambah Post</title>
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-body">
                <form action="/post/tambahpost" method="POST">
                    @csrf
                    <div class="mb-3">
                      <label for="title" class="form-label">Title</label>
                      <input type="text" class="form-control" id="title" name="title" required value="{{ old("title") }}" >
                    </div>
                    <div class="mb-3">
                      <label for="content" class="form-label">Content</label>
                      <input type="text" class="form-control" id="content" name="content" required value="{{ old("content") }}">
                    </div>
                    <div class="mb-3">
                      <label for="author" class="form-label">Author</label>
                      <input type="text" class="form-control" id="author" name="author" required value="{{ old("author") }}">
                    </div>
                    <button type="submit" class="btn btn-primary">Tambah!</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>