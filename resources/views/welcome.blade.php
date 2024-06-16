<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>หน้าแรกเว็บไซต์</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary " data-bs-theme="dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Wachria</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link " aria-current="page" href="#">หน้าแรก</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('blog') }}">บทความทั้งหมด</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">เกี่ยวกับเรา</a>
              </li>
             
              
            </ul>
          </div>
        </div>
      </nav>
    <div class="container py-5">
    <h2>หน้าแรกเว็บไซต์</h2>
    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Minima sapiente, numquam excepturi cum aliquid rerum dolores aliquam? Sunt dolorem aspernatur quis totam, laborum rerum incidunt, ducimus minus, dicta officia doloribus!</p>
    <a href="/blog">บทความทั้งหมด</a>
</div>
</body>
</html>