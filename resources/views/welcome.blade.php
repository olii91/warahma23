@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Home</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>

        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-bottom">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="/home">Pengaduann</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active"><a class="nav-link" href="/home">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="login">Log In</a></li>

                        <form>
                            <input class="search" type="text" placeholder="Cari..." required>	
                            <input class="button" type="button" value="Cari">		
                    </form>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Page Content-->
        <section>
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5">
                    <div class="col-lg-6">
                        
                        <h1 class="mt-3">Pengaduan Masyarakat</h1>
                    </div>
                </div>
            </div>
        </section>

            <div class="container">
                <div class="slider">
                    <div>
                <img src="image./pengaduan1.jpg" width="100%" height="300">
                <img src="image./pengaduan2.png" width="100%" height="300">
                </div>
            </div>
            </div>

        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
