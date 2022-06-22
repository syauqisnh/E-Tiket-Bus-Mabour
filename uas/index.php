<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="shortcut icon" href="logo.png">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Tiket Mabour</title>
    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- my css -->
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-danger shadow-sm fixed-top">
        <div class="container">
            <a class="navbar-brand" href="">
                <img src="logo.png" alt="" width="30" height="30" class="d-inline-block align-text-top">
                E-Tiket Mabour
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#jadwal">Jadwal</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php"><button type="button" class="btn btn-warning">
                                Reservasi Sekarang!</button></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Signup.php"><button type="button"
                                class="btn btn-success">Register</button></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- akhir navbar -->

    <!-- jumbotron -->
    <section class="jumbotron text-center">
        <img src="logo.png" width="200" class="rounded-circle img-thumbnail">
        <h1 class="text-center text-warning">E-Tiket Madiun Bus On Tour</h1>
        <h1 class="text-center text-warning">“MABOUR”</h1>
        <p class="text-center text-white">Platform pemesanan tiket online Madiun Bus On Tour “MABOUR”.</p>
        <p class="text-center text-white">Reservasi Mudah, Tanpa Berebut.</p>
        <a class="nav-link" href="login.php"><button type="button" class="btn btn-warning">Reservasi
                Sekarang!</button></a>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#fff" fill-opacity="1"
                d="M0,96L48,128C96,160,192,224,288,245.3C384,267,480,245,576,208C672,171,768,117,864,122.7C960,128,1056,192,1152,229.3C1248,267,1344,277,1392,282.7L1440,288L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
            </path>
        </svg>
    </section>
    <!-- akhir jumbotron -->

    <!-- jadwal -->
    <section id="jadwal">
        <div class="container">
            <div class="row text-center">
                <h2>Jadwal dan Rute Perjalanan</h2>
                <table class="table table-dark table-sm table table-bordered border-light">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Tempat Titik Singgah</th>
                            <th scope="col">Putaran</th>
                            <th scope="col">Bus 1</th>
                            <th scope="col">Bus 2</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Jl. Pahlawan - Balaikota</td>
                            <td>1</td>
                            <td>Tiba : - &emsp;&emsp;&emsp;&emsp; Berangkat : 09.00</td>
                            <td>Tiba : - &emsp;&emsp;&emsp;&emsp; Berangkat : 09.45</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Jl. Pahlawan - Balaikota</td>
                            <td>2</td>
                            <td>Tiba : - &emsp;&emsp;&emsp;&emsp; Berangkat : 10.30</td>
                            <td>Tiba : - &emsp;&emsp;&emsp;&emsp; Berangkat : 11.15</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Jl. Pahlawan - Balaikota</td>
                            <td>3</td>
                            <td>Tiba : - &emsp;&emsp;&emsp;&emsp; Berangkat : 12.00</td>
                            <td>Tiba : - &emsp;&emsp;&emsp;&emsp; Berangkat : 12.45</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Jl. Pahlawan - Balaikota</td>
                            <td>4</td>
                            <td>Tiba : - &emsp;&emsp;&emsp;&emsp; Berangkat : 13.30</td>
                            <td>Tiba : - &emsp;&emsp;&emsp;&emsp; Berangkat : 14.15</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Jl. Pahlawan - Balaikota</td>
                            <td>5</td>
                            <td>Tiba : - &emsp;&emsp;&emsp;&emsp; Berangkat : 15.00</td>
                            <td>Tiba : - &emsp;&emsp;&emsp;&emsp; Berangkat : 15.45</td>
                        </tr>
                        <tr class="table-active">
                            <th scope="row">2</th>
                            <td>Jl. Pahlawan – Rumah Dinas Walikota</td>
                            <td>1</td>
                            <td>Tiba : 09.01 &emsp;&emsp;&emsp; Berangkat : 09.04</td>
                            <td>Tiba : 09.46 &emsp;&emsp;&emsp; Berangkat : 09.49</td>
                        </tr>
                        <tr class="table-active">
                            <th scope="row"></th>
                            <td>Jl. Pahlawan – Rumah Dinas Walikota</td>
                            <td>2</td>
                            <td>Tiba : 10.31 &emsp;&emsp;&emsp; Berangkat : 10.34</td>
                            <td>Tiba : 11.16 &emsp;&emsp;&emsp; Berangkat : 11.19</td>
                        </tr>
                        <tr class="table-active">
                            <th scope="row"></th>
                            <td>Jl. Pahlawan – Rumah Dinas Walikota</td>
                            <td>3</td>
                            <td>Tiba : 12.01 &emsp;&emsp;&emsp; Berangkat : 12.04</td>
                            <td>Tiba : 12.46 &emsp;&emsp;&emsp; Berangkat : 12.49</td>
                        </tr>
                        <tr class="table-active">
                            <th scope="row"></th>
                            <td>Jl. Pahlawan – Rumah Dinas Walikota</td>
                            <td>4</td>
                            <td>Tiba : 13.31 &emsp;&emsp;&emsp; Berangkat : 13.34</td>
                            <td>Tiba : 14.16 &emsp;&emsp;&emsp; Berangkat : 14.19</td>
                        </tr>
                        <tr class="table-active">
                            <th scope="row"></th>
                            <td>Jl. Pahlawan – Rumah Dinas Walikota</td>
                            <td>5</td>
                            <td>Tiba : 15.01 &emsp;&emsp;&emsp; Berangkat : 15.04</td>
                            <td>Tiba : 15.46 &emsp;&emsp;&emsp; Berangkat : 15.49</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Jl. Musi</td>
                            <td>1</td>
                            <td>Tiba : 09.08 &emsp;&emsp;&emsp; Berangkat : 09.11</td>
                            <td>Tiba : 09.53 &emsp;&emsp;&emsp; Berangkat : 09.56</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Jl. Musi</td>
                            <td>2</td>
                            <td>Tiba : 10.38 &emsp;&emsp;&emsp; Berangkat : 10.41</td>
                            <td>Tiba : 11.23 &emsp;&emsp;&emsp; Berangkat : 11.26</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Jl. Musi</td>
                            <td>3</td>
                            <td>Tiba : 12.08 &emsp;&emsp;&emsp; Berangkat : 12.11</td>
                            <td>Tiba : 12.53 &emsp;&emsp;&emsp; Berangkat : 12.56</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Jl. Musi</td>
                            <td>4</td>
                            <td>Tiba : 13.38 &emsp;&emsp;&emsp; Berangkat : 13.41</td>
                            <td>Tiba : 14.23 &emsp;&emsp;&emsp; Berangkat : 14.26</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Jl. Musi</td>
                            <td>5</td>
                            <td>Tiba : 15.08 &emsp;&emsp;&emsp; Berangkat : 15.11</td>
                            <td>Tiba : 15.52 &emsp;&emsp;&emsp; Berangkat : 15.55</td>
                        </tr>
                        <tr class="table-active">
                            <th scope="row">4</th>
                            <td>Alun Alun</td>
                            <td>1</td>
                            <td>Tiba : 09.16 &emsp;&emsp;&emsp; Berangkat : 09.19</td>
                            <td>Tiba : 10.02 &emsp;&emsp;&emsp; Berangkat : 10.05</td>
                        </tr>
                        <tr class="table-active">
                            <th scope="row"></th>
                            <td>Alun Alun</td>
                            <td>2</td>
                            <td>Tiba : 10.47 &emsp;&emsp;&emsp; Berangkat : 10.50 </td>
                            <td>Tiba : 11.32 &emsp;&emsp;&emsp; Berangkat : 11.35 </td>
                        </tr>
                        <tr class="table-active">
                            <th scope="row"></th>
                            <td>Alun Alun</td>
                            <td>3</td>
                            <td>Tiba : 12.17 &emsp;&emsp;&emsp; Berangkat : 12.20 </td>
                            <td>Tiba : 13.02 &emsp;&emsp;&emsp; Berangkat : 13.05 </td>
                        </tr>
                        <tr class="table-active">
                            <th scope="row"></th>
                            <td>Alun Alun</td>
                            <td>4</td>
                            <td>Tiba : 13.47 &emsp;&emsp;&emsp; Berangkat : 13.50 </td>
                            <td>Tiba : 14.32 &emsp;&emsp;&emsp; Berangkat : 14.35 </td>
                        </tr>
                        <tr class="table-active">
                            <th scope="row"></th>
                            <td>Alun Alun</td>
                            <td>5</td>
                            <td>Tiba : 15.17 &emsp;&emsp;&emsp; Berangkat :15.20 </td>
                            <td>Tiba : 16.01 &emsp;&emsp;&emsp; Berangkat : 16.04 </td>
                        </tr>
                        <tr>
                            <th scope="row">5</th>
                            <td>Jl. Hayam Wuruk</td>
                            <td>1</td>
                            <td>Tiba : 09.28 &emsp;&emsp;&emsp; Berangkat : 09.31 </td>
                            <td>Tiba : 10.14 &emsp;&emsp;&emsp; Berangkat : 10.17 </td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Jl. Hayam Wuruk</td>
                            <td>2</td>
                            <td>Tiba : 10.59 &emsp;&emsp;&emsp; Berangkat : 11.02 </td>
                            <td>Tiba : 11.44 &emsp;&emsp;&emsp; Berangkat : 11.47 </td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Jl. Hayam Wuruk</td>
                            <td>3</td>
                            <td>Tiba : 12.29 &emsp;&emsp;&emsp; Berangkat : 12.32 </td>
                            <td>Tiba : 13.14 &emsp;&emsp;&emsp; Berangkat : 13.17 </td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Jl. Hayam Wuruk</td>
                            <td>4</td>
                            <td>Tiba : 13.59 &emsp;&emsp;&emsp; Berangkat : 14.02 </td>
                            <td>Tiba : 14.44 &emsp;&emsp;&emsp; Berangkat : 14.47 </td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Jl. Hayam Wuruk</td>
                            <td>5</td>
                            <td>Tiba : 15.29 &emsp;&emsp;&emsp; Berangkat : 15.32 </td>
                            <td>Tiba : 16.13 &emsp;&emsp;&emsp; Berangkat : 16.16 </td>
                        </tr>
                        <tr class="table-active">
                            <th scope="row">6</th>
                            <td>Halte Kantor Pos Pahlawan</td>
                            <td>1</td>
                            <td>Tiba : 09:36 &emsp;&emsp;&emsp; Berangkat : 09:39 </td>
                            <td>Tiba : 10:23 &emsp;&emsp;&emsp; Berangkat : 10:26 </td>
                        </tr>
                        <tr class="table-active">
                            <th scope="row"></th>
                            <td>Halte Kantor Pos Pahlawan</td>
                            <td>2</td>
                            <td>Tiba : 11:07 &emsp;&emsp;&emsp; Berangkat : 11:10 </td>
                            <td>Tiba : 11.52 &emsp;&emsp;&emsp; Berangkat : 11.55 </td>
                        </tr>
                        <tr class="table-active">
                            <th scope="row"></th>
                            <td>Halte Kantor Pos Pahlawan</td>
                            <td>3</td>
                            <td>Tiba : 12:37 &emsp;&emsp;&emsp; Berangkat : 12:40 </td>
                            <td>Tiba : 13.22 &emsp;&emsp;&emsp; Berangkat : 13.25 </td>
                        </tr>
                        <tr class="table-active">
                            <th scope="row"></th>
                            <td>Halte Kantor Pos Pahlawan</td>
                            <td>4</td>
                            <td>Tiba : 14.07 &emsp;&emsp;&emsp; Berangkat : 14.10 </td>
                            <td>Tiba : 14.52 &emsp;&emsp;&emsp; Berangkat : 14.55 </td>
                        </tr>
                        <tr class="table-active">
                            <th scope="row"></th>
                            <td>Halte Kantor Pos Pahlawan</td>
                            <td>5</td>
                            <td>Tiba : 15.37 &emsp;&emsp;&emsp; Berangkat : 15.40 </td>
                            <td>Tiba : 16.21 &emsp;&emsp;&emsp; Berangkat : 16.25 </td>
                        </tr>
                        <tr>
                            <th scope="row">7</th>
                            <td>Terminal Purboyo</td>
                            <td>1</td>
                            <td>Tiba : 09.52 &emsp;&emsp;&emsp; Berangkat : 09.55 </td>
                            <td>Tiba : 10.39 &emsp;&emsp;&emsp; Berangkat : 10.42 </td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Terminal Purboyo</td>
                            <td>2</td>
                            <td>Tiba : 11.23 &emsp;&emsp;&emsp; Berangkat : 11.26 </td>
                            <td>Tiba : 12.08 &emsp;&emsp;&emsp; Berangkat : 12.11</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Terminal Purboyo</td>
                            <td>3</td>
                            <td>Tiba : 12.53 &emsp;&emsp;&emsp; Berangkat : 12.56 </td>
                            <td>Tiba : 13.38 &emsp;&emsp;&emsp; Berangkat : 13.41 </td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Terminal Purboyo</td>
                            <td>4</td>
                            <td>Tiba : 14.23 &emsp;&emsp;&emsp; Berangkat : 14.26 </td>
                            <td>Tiba : 15.08 &emsp;&emsp;&emsp; Berangkat : 15.11 </td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Terminal Purboyo</td>
                            <td>5</td>
                            <td>Tiba : 15.53 &emsp;&emsp;&emsp; Berangkat : 15.56 </td>
                            <td>Tiba : 16.37 &emsp;&emsp;&emsp; Berangkat : 16.40 </td>
                        </tr>
                        <tr class="table-active">
                            <th scope="row">8</th>
                            <td>Jl. S Parman</td>
                            <td>1</td>
                            <td>Tiba : 10.04 &emsp;&emsp;&emsp; Berangkat : 10.07</td>
                            <td>Tiba : 10.51 &emsp;&emsp;&emsp; Berangkat : 10.54</td>
                        </tr>
                        <tr class="table-active">
                            <th scope="row"></th>
                            <td>Jl. S Parman</td>
                            <td>2</td>
                            <td>Tiba : 11.35 &emsp;&emsp;&emsp; Berangkat : 11.38</td>
                            <td>Tiba : 12.10 &emsp;&emsp;&emsp; Berangkat : 12.13</td>
                        </tr>
                        <tr class="table-active">
                            <th scope="row"></th>
                            <td>Jl. S Parman</td>
                            <td>3</td>
                            <td>Tiba : 13.05 &emsp;&emsp;&emsp; Berangkat : 13.08</td>
                            <td>Tiba : 13.50 &emsp;&emsp;&emsp; Berangkat : 13.53</td>
                        </tr>
                        <tr class="table-active">
                            <th scope="row"></th>
                            <td>Jl. S Parman</td>
                            <td>4</td>
                            <td>Tiba : 14.35 &emsp;&emsp;&emsp; Berangkat : 14.38</td>
                            <td>Tiba : 15.20 &emsp;&emsp;&emsp; Berangkat : 15.23</td>
                        </tr>
                        <tr class="table-active">
                            <th scope="row"></th>
                            <td>Jl. S Parman</td>
                            <td>5</td>
                            <td>Tiba : 16.05 &emsp;&emsp;&emsp; Berangkat : 16.08</td>
                            <td>Tiba : 16.48 &emsp;&emsp;&emsp; Berangkat : 16.51</td>
                        </tr>
                        <tr>
                            <th scope="row">9</th>
                            <td>Jl. Slamet Riyadi</td>
                            <td>1</td>
                            <td>Tiba : 10.12 &emsp;&emsp;&emsp; Berangkat : 10.15</td>
                            <td>Tiba : 10.59 &emsp;&emsp;&emsp; Berangkat : 11.02</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Jl. Slamet Riyadi</td>
                            <td>2</td>
                            <td>Tiba : 11.43 &emsp;&emsp;&emsp; Berangkat : 11.46</td>
                            <td>Tiba : 12.18 &emsp;&emsp;&emsp; Berangkat : 12.21</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Jl. Slamet Riyadi</td>
                            <td>3</td>
                            <td>Tiba : 13.13 &emsp;&emsp;&emsp; Berangkat : 13.16</td>
                            <td>Tiba : 13.58 &emsp;&emsp;&emsp; Berangkat : 14.01</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Jl. Slamet Riyadi</td>
                            <td>4</td>
                            <td>Tiba : 14.43 &emsp;&emsp;&emsp; Berangkat : 14.46</td>
                            <td>Tiba : 15.28 &emsp;&emsp;&emsp; Berangkat : 15.31</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Jl. Slamet Riyadi</td>
                            <td>5</td>
                            <td>Tiba : 16.13 &emsp;&emsp;&emsp; Berangkat : 16.16</td>
                            <td>Tiba : 16.56 &emsp;&emsp;&emsp; Berangkat : 16.59</td>
                        </tr>
                        <tr class="table-active">
                            <th scope="row">10</th>
                            <td>Halte Mastrip (Jl. Mastrip)</td>
                            <td>1</td>
                            <td>Tiba : 10.24 &emsp;&emsp;&emsp; Berangkat : 10.27</td>
                            <td>Tiba : 11.11 &emsp;&emsp;&emsp; Berangkat : 11.14</td>
                        </tr>
                        <tr class="table-active">
                            <th scope="row"></th>
                            <td>Halte Mastrip (Jl. Mastrip)</td>
                            <td>2</td>
                            <td>Tiba : 11.55 &emsp;&emsp;&emsp; Berangkat : 11.58</td>
                            <td>Tiba : 12.30 &emsp;&emsp;&emsp; Berangkat : 12.33</td>
                        </tr>
                        <tr class="table-active">
                            <th scope="row"></th>
                            <td>Halte Mastrip (Jl. Mastrip)</td>
                            <td>3</td>
                            <td>Tiba : 13.25 &emsp;&emsp;&emsp; Berangkat : 13.28</td>
                            <td>Tiba : 14.10 &emsp;&emsp;&emsp; Berangkat : 14.13</td>
                        </tr>
                        <tr class="table-active">
                            <th scope="row"></th>
                            <td>Halte Mastrip (Jl. Mastrip)</td>
                            <td>4</td>
                            <td>Tiba : 14.55 &emsp;&emsp;&emsp; Berangkat : 14.58</td>
                            <td>Tiba : 15.40 &emsp;&emsp;&emsp; Berangkat : 15.43</td>
                        </tr>
                        <tr class="table-active">
                            <th scope="row"></th>
                            <td>Halte Mastrip (Jl. Mastrip)</td>
                            <td>5</td>
                            <td>Tiba : 16.25 &emsp;&emsp;&emsp; Berangkat : 16.28</td>
                            <td>Tiba : 17.08 &emsp;&emsp;&emsp; Berangkat : 17.11</td>
                        </tr>
                        <tr>
                            <th scope="row">11</th>
                            <td>Jl. Kompol Sunaryo</td>
                            <td>1</td>
                            <td>Tiba : 10.36 &emsp;&emsp;&emsp; Berangkat : 10.39</td>
                            <td>Tiba : 11.23 &emsp;&emsp;&emsp; Berangkat : 11.26</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Jl. Kompol Sunaryo</td>
                            <td>2</td>
                            <td>Tiba : 12.07 &emsp;&emsp;&emsp; Berangkat : 12.10</td>
                            <td>Tiba : 12.42 &emsp;&emsp;&emsp; Berangkat : 12.45</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Jl. Kompol Sunaryo</td>
                            <td>3</td>
                            <td>Tiba : 13.37 &emsp;&emsp;&emsp; Berangkat : 13.40</td>
                            <td>Tiba : 14.22 &emsp;&emsp;&emsp; Berangkat : 14.25</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Jl. Kompol Sunaryo</td>
                            <td>4</td>
                            <td>Tiba : 15.07 &emsp;&emsp;&emsp; Berangkat : 15.10</td>
                            <td>Tiba : 15.52 &emsp;&emsp;&emsp; Berangkat : 15.55</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Jl. Kompol Sunaryo</td>
                            <td>5</td>
                            <td>Tiba : 16.37 &emsp;&emsp;&emsp; Berangkat : 16.40</td>
                            <td>Tiba : 17.20 &emsp;&emsp;&emsp; Berangkat : 17.23</td>
                        </tr>
                        <tr class="table-active">
                            <th scope="row">12</th>
                            <td>Jl. Pahlawan</td>
                            <td>1</td>
                            <td>Tiba : 10.45 &emsp;&emsp;&emsp; Berangkat : 10.48 </td>
                            <td>Tiba : 11.32 &emsp;&emsp;&emsp; Berangkat : 11.35</td>
                        </tr>
                        <tr class="table-active">
                            <th scope="row"></th>
                            <td>Jl. Pahlawan</td>
                            <td>2</td>
                            <td>Tiba : 12.16 &emsp;&emsp;&emsp; Berangkat : 12.19</td>
                            <td>Tiba : 12.51 &emsp;&emsp;&emsp; Berangkat : 12.57</td>
                        </tr>
                        <tr class="table-active">
                            <th scope="row"></th>
                            <td>Jl. Pahlawan</td>
                            <td>3</td>
                            <td>Tiba : 13.46 &emsp;&emsp;&emsp; Berangkat : 14.49</td>
                            <td>Tiba : 14.31 &emsp;&emsp;&emsp; Berangkat : 14.34</td>
                        </tr>
                        <tr class="table-active">
                            <th scope="row"></th>
                            <td>Jl. Pahlawan</td>
                            <td>4</td>
                            <td>Tiba : 15.16 &emsp;&emsp;&emsp; Berangkat : 15.19</td>
                            <td>Tiba : 16.01 &emsp;&emsp;&emsp; Berangkat : 16.04</td>
                        </tr>
                        <tr class="table-active">
                            <th scope="row"></th>
                            <td>Jl. Pahlawan</td>
                            <td>5</td>
                            <td>Tiba : 16.46 &emsp;&emsp;&emsp; Berangkat : -</td>
                            <td>Tiba : 17.29 &emsp;&emsp;&emsp; Berangkat : -</td>
                        </tr>
                    </tbody>
                </table>
            </div>
    </section>
    <!-- akhir jadwal -->

    <!-- about -->
    <section id="about">
        <div class="container">
            <div class="row text-center">
                <h2>About</h2>
                <p>Madiun Bus On Tour atau "MABOUR" ini merupakan salah satu fasilitas yang diberikan pemerintah
                    Kabupaten Madiun. Bus ini beroperasi pada hari Weekend (Sabtu dan Minggu) Dimulai pukul 09.00 hingga
                    16.00 WIB. Bus ini memiliki 30 kursi yang dapat menempuh jarak 21 km dan waktu tempuh 90 menit untuk
                    satu putarannya. Destinasi yang dituju di antaranya Tugu Pendekar Proliman, Busbow, Dumilah Park,
                    hingga kawasan destinasi di Pahlawan Street Center.</p>
            </div>
    </section>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#273036" fill-opacity="1"
            d="M0,32L80,64C160,96,320,160,480,160C640,160,800,96,960,74.7C1120,53,1280,75,1360,85.3L1440,96L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z">
        </path>
    </svg>
    <!-- akhir about -->

    <!-- footer -->
    <footer class="bg-danger text-white text-center pb-2">
        <p>Created By <a href="" class="text-white fw-bold">Kelompok 3</a></p>
    </footer>
    <!-- akhir footer -->
</body>

</html>