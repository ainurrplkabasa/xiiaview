<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <title>Form Registrasi</title>
</head>
<body>
    
    <div class="container pt-4 bg-white">
        <div class="row">
            <div class="col-md-8 col-xl-6">
                <h1>Halaman Registrasi Pelanggan</h1>
                <hr>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('pelanggans.store')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label" for="pelangganid">Pelanggan ID</label>
                        <input type="text" class="form-control @error('pelangganid') is-invalid
                            @enderror" id="pelangganid" name="pelangganid" value="{{ old('pelangganid') }}">
                        @error('pelanggaid')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="namapelanggan" class="form-label">Nama Pelanggan</label>
                        <input type="text" class="form-control @error('namapelanggan') is-invalid 
                        @enderror" id="namapelanggan" name="namapelanggan" value="{{ old('namapelanggan') }}">
                        @error('namapelanggan')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <input type="text" class="form-control" id="alamat" name="alamat">
                    </div>

                    <div class="mb-3">
                        <label for="notelepon" class="form-label">No Telepon</label>
                        <input type="text" class="form-control" id="notelepon" name="notelepon" value="{{ old('notelepon') }}">
                    </div>

                    <button type="submit" class="btn btn-primary mb-2">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>