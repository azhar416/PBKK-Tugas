<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PBKK</title>

    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card mt-5">
                    <div class="card-body">
                        <h3 class="text-center">FORMULIR</h3>
                        <br />

                        {{-- @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif --}}

                        <br />
                        <!-- form validasi -->
                        <form action="/proses" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input class="form-control" type="text" name="nama" value="{{ old('nama') }}"
                                    class="@error('nama') is-invalid @enderror">
                                @error('nama')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="nrp">NRP</label>
                                <input class="form-control" type="text" name="nrp"
                                    value="{{ old('nrp') }}" class="@error('nrp') is-invalid @enderror">
                                @error('nrp')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="usia">Usia</label>
                                <input class="form-control" type="text" name="usia" value="{{ old('usia') }}"
                                    class="@error('usia') is-invalid @enderror">
                                @error('usia')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="departemen">Departemen</label>
                                <input class="form-control" type="text" name="departemen" value="{{ old('departemen') }}"
                                    class="@error('departemen') is-invalid @enderror">
                                @error('departemen')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="ipk">IPK</label>
                                <input class="form-control" type="text" name="ipk" value="{{ old('ipk') }}"
                                    class="@error('ipk') is-invalid @enderror">
                                @error('ipk')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="file">Upload Image</label>
                                <input class="form-control-file" type="file" name="file" value="{{ old('file') }}"
                                    class="@error('file') is-invalid @enderror">
                                @error('file')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input class="btn btn-primary" type="submit" value="Proses">
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
