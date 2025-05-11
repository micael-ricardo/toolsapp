<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Gerenciador de Ferramentas')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    @livewireStyles
</head>
<body>
 <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
    <div class="container">
        <div class="d-flex justify-content-center w-100">
            <h1 class="navbar-brand">Ferramentas</h1>
        </div>
    </div>
  </nav>

     <div class="container">
        {{ $slot }}
     </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    @livewireScripts
</body>
</html>
