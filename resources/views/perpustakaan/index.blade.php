<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Perpustakaan</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', sans-serif;
            background-color: #f5f5f5;
            color: #333;
        }

        .container {
            max-width: 800px;
            margin: 40px auto;
            padding: 20px;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.05);
        }

        h1 {
            text-align: center;
            font-size: 26px;
            margin-bottom: 30px;
            color: #2c3e50;
        }

        .perpus {
            margin-bottom: 30px;
            border-bottom: 1px solid #e0e0e0;
            padding-bottom: 20px;
        }

        .perpus h2 {
            margin: 0;
            font-size: 20px;
            color: #2980b9;
        }

        .alamat {
            font-size: 14px;
            color: #777;
            margin-top: 4px;
            margin-bottom: 10px;
        }

        .buku {
            padding-left: 15px;
        }

        .buku-item {
            margin-bottom: 10px;
        }

        .buku-item strong {
            color: #2d3436;
        }

        .buku-detail {
            font-size: 13px;
            color: #555;
        }

        @media (max-width: 600px) {
            .container {
                padding: 15px;
            }

            h1 {
                font-size: 22px;
            }

            .perpus h2 {
                font-size: 18px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>📚 Data Perpustakaan & Buku</h1>

        @foreach($perpustakaans as $perpus)
            <div class="perpus">
                <h2>{{ $perpus->nama }}</h2>
                <div class="alamat">{{ $perpus->alamat }}</div>

                <div class="buku">
                    @foreach($perpus->bukus as $buku)
                        <div class="buku-item">
                            <strong>{{ $buku->judul }}</strong><br>
                            <div class="buku-detail">
                                Penulis: {{ $buku->penulis }} |
                                Penerbit: {{ $buku->penerbit }} |
                                Tahun: {{ $buku->tahun_terbit }}
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @endforeach
    </div>
</body>
</html>
