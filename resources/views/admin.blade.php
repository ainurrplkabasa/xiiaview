<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <title>Admin Dasboard</title>
</head>
<body>
    <div class="container text-center mt-3 p-4 bg-white">
        <h1 class="mb-3">Halaman Admin Dasboard</h1>
        <div class="row">
            <div class="col-12">
                @component('layout.alert')
                    @slot('class')
                        primary
                    @endslot

                    @slot('judul')
                        Peringatan
                    @endslot
                    10 siswa tidak ngoding
                @endcomponent

                @component('layout.alert')
                @slot('class')
                    danger
                @endslot

                @slot('judul')
                    info
                @endslot
                    semangat ngoding
                @endcomponent

                @component('layout.alert')
                @slot('class')
                    success
                @endslot

                @slot('judul')
                    horey
                @endslot
                    sukses login cuy
                @endcomponent
            </div>
        </div>
    </div>
    <script src="/js/bootstrap.bundle.min.js"></script>
</body>
</html>