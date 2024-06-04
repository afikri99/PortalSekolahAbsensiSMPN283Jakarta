<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Site | Portal SMPN 283 Jakarta</title>
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body style="min-height: 100vh" class="bg-dark">
    <section class="container pt-5">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="card p-5 rounded-4">
                    <h2 class="text-center">Portal Masuk SMP Negeri 283 Jakarta</h2>
                    <center><img src="/assets/img/logo-smpn.svg" alt="" class="img-fluid" width="192"></center>
                    <form action="" method="post">
                        <input type="text" name="nip" placeholder="Masukkan Nomor Induk Pegawai" class="form-control mb-2" required>
                        <input type="password" name="password" placeholder="Masukkan Password" class="form-control mb-2" required>
                        @csrf 
                        <button type="submit" class="btn btn-dark w-100 fw-bolder" >Masuk</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>
</html>