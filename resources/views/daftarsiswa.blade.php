<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar Siswa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="text-right">
                <h1>Daftar Siswa</h1>
            </div>
        </div><hr>

        <div class="row">
            <div class="col-md-4">
                <div class="text-right">
                    <form action="{{route('daftarsiswa.index')}}">
                        <select name="kelas" id="" class="form-control form-control-sm">
                            <option value="">Cari</option>
                            <option value="6A">6A</option>
                            <option value="6B">6B</option>
                            <option value="6C">6C</option> 
                            <option value="6D">6D</option>
                        </select>

                        <input type="submit" class="btn btn-outline-primary float-right mt-2 mb-4" value="Cari">
                    </form>
                </div>
            </div>
        </div>
        
        
        <!-- <h2>RRRRRRRRRRRRRRRRRRRRRRRRRRRR</h2> -->



        <div>
                <table class="table table-striped">
                    <thead class="thead-dark">
                    <tr>
                        <td>No</td>
                        <td>Nama</td>
                        <td>Kelas</td>
                    </tr>
                    </thead>
                <tbody>
                    @php
                        $no = 1;
                    @endphp
                    @forelse ($mahasiswa as $mhs)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{$mhs['nama']}}</td>
                        <td>{{$mhs['kelas']}}</td>
                    </tr>
                        
                    @empty
                        <td colspan="3"> Tidak ada Data</td>
                    @endforelse
                </tbody>
                </table>
        </div>
    </div>
</body>
</html>