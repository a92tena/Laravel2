<nav class="h-10v bg-nav flex flex-row justify-start items-center space-x-2 ">
    <a class= "btn  btn-primary " href="about">About</a>
    <a class= "btn  btn-primary " href="/">home</a>

    @auth
        <a href="{{route("alumnos.index")}}" class=" btn btn-secondary" href="">Alumnos</a>
    @endauth
    @auth
    <a class= "btn  btn-primary " href="proyecto">Proyectos</a>
    @endauth
</nav>
