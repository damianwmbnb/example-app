<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inicio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    @include('Nav')

    <!---VIDEO-->
    <section class="mb-5">
        <iframe width="100%" height="500" aria-controls="false" src="https://www.youtube.com/embed/067to_-OCpQ?si=v1pxzqkumIxGoI9Z" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share; loop" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
    </section>

    <div class="row g-0 bg-body-secondary position-relative ">
        <div class="col-md-6 mb-md-0 p-md-4">
          <img src="https://wallpapers.com/images/featured/ultra-hd-wazf67lzyh5q7k32.jpg" class="w-100" alt="...">
        </div>
        <div class="col-md-6 p-4 ps-md-0 text-center pt-xxl-5">
          <h5 class="mt-0 ">Nuevo Evento</h5>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Voluptatibus quia laboriosam iusto? Rerum a beatae eveniet,
                quae obcaecati tempora illo illum tempore! Sequi nostrum fugiat
                commodi! Ea iusto nostrum fuga.
            </p>
            <a href="#" class="btn btn-primary">Mas Informacion</a>
        </div>
    </div>

    <div class="row row-cols-2 row-cols-md-2 " style="margin: 0%;">
        <div class="col w-50">
            <p class="text-center mt-3 fs-3 fw-bold">Servicios</p>
          <div class="card">
            <img src="https://e0.pxfuel.com/wallpapers/815/38/desktop-wallpaper-group-of-minimalistic-4096x2304-clean.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
          </div>
        </div>

        <div class="col w-50">
            <p class="text-center mt-3 fs-3 fw-bold">Apoyos</p>
          <div class="card">
            <img src="https://e0.pxfuel.com/wallpapers/815/38/desktop-wallpaper-group-of-minimalistic-4096x2304-clean.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
          </div>
        </div>
    </div>

    <div class="row g-0 bg-body-secondary position-relative mt-5">
        <div class="col-md-6 p-4 ps-md-0 text-center pt-xxl-5">
          <h5 class="mt-0 ">Sobre Nosotros</h5>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Voluptatibus quia laboriosam iusto? Rerum a beatae eveniet,
                quae obcaecati tempora illo illum tempore! Sequi nostrum fugiat
                commodi! Ea iusto nostrum fuga.
            </p>
            <a href="#" class="btn btn-primary">Mas Informacion</a>
        </div>
        <div class="col-md-6 mb-md-0 p-md-4">
            <img src="https://wallpapers.com/images/featured/ultra-hd-wazf67lzyh5q7k32.jpg" class="w-100" alt="...">
          </div>
    </div>
    @include('Footer')
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" ></script>
</body>
</html>
