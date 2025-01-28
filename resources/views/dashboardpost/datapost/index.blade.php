<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Data Post</title>
</head>
<body>
    {{-- include message from view flash-message --}}
    @include('flash-message')
    <div class="container">
        {{-- Search post based on title or author --}}
        <form action="/post/cariPost" method="POST">
            @csrf
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Cari post..." aria-label="Cari post" name="cariPost" value="{{ request('cariPost') }}">
                <button class="btn btn-outline-secondary" type="submit">Cari post!</button>
            </div>
        </form>
        <h1>Data Post</h1>
        <div class="card mb-3">
            <h2><a href="/post/viewformtambahpost" class="btn btn-primary">Tambah Post</a></h2>
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Title</th>
                    <th scope="col">Content</th>
                    <th scope="col">Author</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                @foreach ($post as $data)
                    <tr>
                        <td>{{ $data->title }}</td>
                        <td>{{ $data->content }}</td>
                        <td>{{ $data->author }}</td>
                        <td>
                            <a href="/post/viewubahpost/{{ $data->id_post }}" class="btn btn-success">Edit!</a>
                        </td>
                        <td>
                            <form action="/post/hapusPost/{{ $data->id_post }}" class="d-inline" method="POST">
                                @method('delete')
                                @csrf
                                <button class="badge border-0" onclick="return confirm('Yakin mau hapus data ini?')" class="btn btn-danger">Hapus!</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
              </table>
        </div>
    </div>
</body>
</html>