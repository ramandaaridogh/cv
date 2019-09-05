 <html>
   <head>
     <meta charset="utf-8">
     <title>@yield('title')</title>
   </head>

   <body>
      <header>
        <nav>
          <a href="/">Home</a>
          <a href="/blog">Blog</a>
        </nav>
      </header>
      <br/>


      @yield('content')


      <br/>
      <footer>
        &copy; Laravel Ramanda 2018
      </footer>
   </body>
 </html>