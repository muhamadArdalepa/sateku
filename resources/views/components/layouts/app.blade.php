<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <script src="https://kit.fontawesome.com/52c63e43bb.js" crossorigin="anonymous"></script>
        <title>{{ $title ?? 'Page Title' }}</title>
    </head>
    <body>
        <nav class="navbar fixed-bottom bg-white shadow p-0">
            <div class="container-fluid d-flex align-items-center justify-content-around">
                <a href="/" class="p-3 text-primary border-top" wire:navigate>
                    <i class="fa-solid fa-home"></i>
                </a>
                <a href="/add" class="p-2 text-dark" wire:navigate>
                    <i class="fa-solid fa-plus-circle"></i>
                </a>
                <a href="" class="p-2 text-dark" wire:navigate>
                    <i class="fa-solid fa-list"></i>
                </a>
            </div>
          </nav>
          <main class="p-3 pb-5">
              {{ $slot }}
          </main>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </body>
</html>
