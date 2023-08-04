<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.rtl.min.css" integrity="sha384-dc2NSrAXbAkjrdm9IYrX10fQq9SDG6Vjz7nQVKdKcJl3pC+k37e7qJR5MVSCS+wR" crossorigin="anonymous" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">

    <link rel="stylesheet" href="style.css">
    <title>Biodata</title>
</head>
<body id="home">
   
  {{-- navbar --}}
<nav class="navbar navbar-expand-lg fixed-top" style="background-color: #6f8e73";>
  <div class="container-fluid">
    <a class="navbar-brand" href="#">SIAP</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#subject">Subjects</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

{{-- jumbotron --}}
<section class="jumbotron text-center">
  <p><img src="img/Rizka.jpeg" alt="Rizka Nuzulia" width="200" class="rounded-circle img-thumbnail"></p>
  <h1 class="display-8">Rizka Nuzulia</h1>
  <p class="lead">Student's of Informatics</p>
  <p>Banda Aceh, Ulee Kareng</p>

  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffffff" fill-opacity="1" d="M0,0L34.3,42.7C68.6,85,137,171,206,181.3C274.3,192,343,128,411,122.7C480,117,549,171,617,176C685.7,181,754,139,823,122.7C891.4,107,960,117,1029,122.7C1097.1,128,1166,128,1234,106.7C1302.9,85,1371,43,1406,21.3L1440,0L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path></svg>
</section>

{{-- About --}}
<section id="about">
   <div class="container">
     <div class="row text-center mb-3">
       <div class="col">
         <h2>About Me!</h2>
       </div>
     </div> 
     <div class="row justify-content-center">
       <div class="col-6">
       <p>Saya adalah mahasiswi jurusan informatika angkatan 2020. Sebelumnya, saya merupakan alumni dari MAS Darul Ulum. Hobi saya menonton dan travelling. Warna kesukaan hitam, dan segala hal yang simple.</p>
       </div>
       <div class="col-6">
       <p>Saya merupakan seorang individu yang terbiasa bersosialisasi dan mudah berkomunikasi dengan orang lain. Harapan saya ingin menjadi data scientist. Mata kuliah yang paling disenangi itu data mining.</p>
       </div> 
     </div>
   </div>
   <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#bdc5be" fill-opacity="1" d="M0,224L34.3,218.7C68.6,213,137,203,206,170.7C274.3,139,343,85,411,85.3C480,85,549,139,617,144C685.7,149,754,107,823,122.7C891.4,139,960,213,1029,213.3C1097.1,213,1166,139,1234,112C1302.9,85,1371,107,1406,117.3L1440,128L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path></svg>
</section>

{{-- Subjects --}}
<section id="subject">
  <div class="container">
    <div class="row text-center">
      <div class="col">
        <h2>My Favorite Subjects</h2>
      </div>
      <div class="row pt-3">
        <div class="col-4">
          <div class="card">
            <img src="img/data.jpg" class="card-img-top" alt="Data Mining">
            <div class="card-body">
              <p class="card-text">Data Mining</p>
            </div>
          </div>
        </div>
        <div class="col-4">
          <div class="card">
            <img src="img/web.jpg" class="card-img-top" alt="Web Programming">
            <div class="card-body">
              <p class="card-text">Web Programming</p>
            </div>
          </div>
        </div>
        <div class="col-4">
          <div class="card">
            <img src="img/rpl.jpg" class="card-img-top" alt="Software Engineering">
            <div class="card-body">
              <p class="card-text">Software Engineering</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


{{-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffffff" fill-opacity="1" d="M0,224L26.7,224C53.3,224,107,224,160,234.7C213.3,245,267,267,320,256C373.3,245,427,203,480,197.3C533.3,192,587,224,640,218.7C693.3,213,747,171,800,149.3C853.3,128,907,128,960,149.3C1013.3,171,1067,213,1120,224C1173.3,235,1227,213,1280,192C1333.3,171,1387,149,1413,138.7L1440,128L1440,320L1413.3,320C1386.7,320,1333,320,1280,320C1226.7,320,1173,320,1120,320C1066.7,320,1013,320,960,320C906.7,320,853,320,800,320C746.7,320,693,320,640,320C586.7,320,533,320,480,320C426.7,320,373,320,320,320C266.7,320,213,320,160,320C106.7,320,53,320,27,320L0,320Z"></path></svg> --}}
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffffff" fill-opacity="1" d="M0,96L26.7,85.3C53.3,75,107,53,160,80C213.3,107,267,181,320,202.7C373.3,224,427,192,480,197.3C533.3,203,587,245,640,224C693.3,203,747,117,800,112C853.3,107,907,181,960,202.7C1013.3,224,1067,192,1120,165.3C1173.3,139,1227,117,1280,112C1333.3,107,1387,117,1413,122.7L1440,128L1440,320L1413.3,320C1386.7,320,1333,320,1280,320C1226.7,320,1173,320,1120,320C1066.7,320,1013,320,960,320C906.7,320,853,320,800,320C746.7,320,693,320,640,320C586.7,320,533,320,480,320C426.7,320,373,320,320,320C266.7,320,213,320,160,320C106.7,320,53,320,27,320L0,320Z"></path></svg>
</section>



{{-- Footer --}}
<footer style="background-color: white" class="text-center p-3">
  <p>Created with <i class="bi bi-suit-heart-fill text-danger"></i> by <a href="https://www.instagram.com/rizkaamr_/" class="text-black fw-bold">Rizka Nuzulia</a></p>
</footer>
   
   <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
      
</body>
</html>