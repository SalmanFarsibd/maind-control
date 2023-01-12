<!doctype html>
<html lang="en">

<head>
  <title>Maind-control</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <link href="assets/css/style.css">
</head>

<body>
  <header>
    <!-- nav start -->
    <nav class="navbar navbar-expand-sm bg-light">
      <div class="container">
        <a class="navbar-brand fs-4 fw-bold text-dark" href="#">Maind Control</a>
        <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
          <ul class="navbar-nav ms-auto ">
            <li class="nav-item">
              <a class="nav-link active text-success" href="#" aria-current="page">Home <span class="visually-hidden">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-muted" href="#">Book's</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-muted" href="#">Brain</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-muted" href="#">Friend's</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-muted" href="#">details</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle text-danger" href="#" id="dropdownId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Maind Action</a>
              <div class="dropdown-menu my-4" aria-labelledby="dropdownId">
              <ul class="list-group">
                <li class="dropdown-item  d-flex justify-content-between align-items-center">
                <a class="dropdown-item" href="#">
                  নিজের পরিবর্তন </a>
                  <span class="badge bg-primary rounded-pill">12</span>
                </li>
                <li class="dropdown-item list-group-item d-flex justify-content-between align-items-center">
                <a class="dropdown-item" href="#">
                  উম্মতের ফিকির </a>
                  <span class="badge bg-primary rounded-pill">50</span>
                </li>
                <li class="dropdown-item list-group-item d-flex justify-content-between align-items-center">
                <a class="dropdown-item" href="#">
                  চিন্তা করা ?</a>
                  <span class="badge bg-primary rounded-pill">99</span>
                </li>
                <li class="dropdown-item list-group-item d-flex justify-content-between align-items-center">
                <a class="dropdown-item" href="#">
                  উদ্দেশ্য ঠিক করা </a>
                  <span class="badge bg-primary rounded-pill">99</span>
                </li>
                <li class="dropdown-item d-flex justify-content-between align-items-center">
                <a class="dropdown-item" href="#">
                  চলমান কাজের হিসেব <br> ঠিক রাখা </a>
                  <span class="badge bg-primary rounded-pill">99</span>
                </li>
                </li>
              </ul>           
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- nav end -->
  </header>
    {{$slot}}
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>