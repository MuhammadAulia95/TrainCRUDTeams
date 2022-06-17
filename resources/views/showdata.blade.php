<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Insert Data Teams</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <h1 class="text-center mb-4">Edit Data Teams</h1>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-5">
                <div class="card">
                    <div class="card-body">
                        <form action="/updatedata/{{ $data->id }}" method="POST" enctype="multipart/form-data">
                            @csrf   {{--  ini adalah token --}}
                            <div class="mb-3">
                              <label for="exampleInputEmail1" class="form-label">User Id :</label>
                              <input type="text" name="user_id" class="form-control" id="exampleInputEmail1"  value="{{ $data->user_id }}">
                            </div>
                            <div class="mb-3">
                              <label for="exampleInputEmail1" class="form-label">Position Id :</label>
                              <input type="text" name="position_id" class="form-control" value="{{ $data->position_id }}">
                            </div>
                            <div class="mb-3">
                              <label for="exampleInputEmail1" class="form-label">Photo Team:</label>
                              <input type="file" name="photo_team" class="form-control" value="{{ $data->photo_team }}">
                            </div>
                            <div class="mb-3">
                              <label for="exampleInputEmail1" class="form-label">Moto:</label>
                              <input type="text" name="moto" class="form-control" value="{{ $data->moto }}">
                            </div>
                            <div class="mb-3">
                              <label for="exampleInputEmail1" class="form-label">Telp:</label>
                              <input type="text" name="no_telp" class="form-control" value="{{ $data->no_telp }}">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                          </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</body>
</html>