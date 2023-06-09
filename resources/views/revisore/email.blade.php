<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Prj Post</title>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@3.6.12/dist/css/splide.min.css">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@3.6.12/dist/js/splide.min.js"></script>
        {{-- <script src="path-to-the-script/splide-extension-auto-scroll.min.js"></script> --}}

        @vite(['resources/css/app.css','resources/js/app.js'])

       
    </head>
    <body>
       
       <h1>
         l'utente {{$user['name']}} ti ha contattato per diventare revisore: Email: {{$user['email']}}
       </h1>
           
<br>
<br>
        
    <h2>Se vuoi renderlo Revisore clicca sotto:</h2>
    <a href="{{route('make.revisor',compact('user'))}}" class="btn btn-danger">Rendi revisore</a>
   
    </body>
</html>