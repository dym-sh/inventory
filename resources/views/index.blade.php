<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>inventory</title>
    @vite('resources/css/app.css')
</head>
<body class="px-5 py-5 min-h-screen flex">

  <nav class="flex flex-col min-h-full space-y-4">
    <x-link href="/" title="Archive" icon="home" />
    <x-link href="/archive" title="Archive" icon="calendar" />
    <div class="grow"></div>
    <x-link href="/settings" title="Settings" icon="settings" />
  </nav>

  <main class="ml-5 flex flex-col space-y-4">
    <form action="/search">
      <x-input type="search" name="s"/>
    </form>

    <x-post>
      Wwwwwwwwwwwwwwwww wwwwwwwwwww wwwwwwww<br>
      Wwwwwwwwwww wwwwwwwwwwwwwwwwwwww<br>
      Wwwwwwwww<br>
    </x-post>

    <x-comment>
      YyyyyyyyYyy yyYyyyYYy YyYY
    </x-comment>

    <x-comment>
      YyyyyyyyYyy yyYyyyYYy YyYY
    </x-comment>

    <x-comment>
      YyyyyyyyYyy yyYyyyYYy YyYY
    </x-comment>

  </main>



</body>
</html>