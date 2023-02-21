<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>
        main h5 {
            /* border: 1px solid black; */
            margin: 0px;
        }
    </style>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-primary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Blade Templating</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Product</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main>
        <div class="container">
            <h5>Nama : {{ $name }}</h5>
            <h5>Alamat : {{ $alamat }}</h5>
            <h5>Pekerjaan : {{ $pekerjaan }}</h5>
        </div>
        <br>

        {{-- If Statement --}}
        <div class="container">
            @if ($role === 'admin')
                <p>Selamat Datang Admin {{ $name }}, anda login sebagai <span
                        class="fs-4 fw-bold">{{ $role }}</span></p>
            @elseif ($role === 'user')
                <p>Selamat Datang User {{ $name }}, anda login sebagai <span
                        class="fs-4 fw-bold">{{ $role }}</span></p>
            @else
                <p>Selamat Datang tamu</p>
            @endif
        </div>

        {{-- Switch Case --}}
        <div class="container">
            @switch($role)
                @case('admin')
                    <p>Selamat Datang Admin {{ $name }}, anda login sebagai <span
                            class="fs-4 fw-bold">{{ $role }}</span></p>
                @break

                @case('user')
                    <p>Selamat Datang User {{ $name }}, anda login sebagai <span
                            class="fs-4 fw-bold">{{ $role }}</span></p>
                @break

                @default
                    <p>Selamat Datang tamu</p>
            @endswitch
        </div>
        <br>

        {{-- For Loop --}}
        <div class="container">
            @for ($i = 1; $i <= 10; $i++)
                @for ($j = 1; $j <= $i; $j++)
                    *
                @endfor
                <p></p>
            @endfor
        </div>
        <br>

        {{-- Foreach --}}
        <div class="container">
            @foreach ($buah as $data)
                <p>{{ $data }}</p>
            @endforeach
        </div>
        <br>
        {{--  --}}
        <div class="container">
            <table class="table">
                <thead class="bg-warning">
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Nama Buah</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($buah as $data)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $data }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </main>

    <footer>

    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>

</html>
