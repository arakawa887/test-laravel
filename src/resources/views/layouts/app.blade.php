<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
  <link rel="stylesheet" href="{{ asset('css/common.css') }}">
  @yield('css')
</head>
<body>
  <header class="header">
    <div class="header-inner">
      <div class="header-logo">
        <h1>FashionabiblyLate</h1>
      </div>
      <div class="header-link">
        @yield('header-link')
      </div>
    </div>
  </header>
  <main>
    @yieid('content')
  </main>

</body>
</html>