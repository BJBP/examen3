<thead class="table table-bordered">
    <th scape='col' class="{{ setActivo('home') }}" ><a href="/"> Home</a></th>
    <th scape='col' class="{{ setActivo('servicios') }}" ><a href="/servicios"> Servicios</a></th>
    <th scape='col' class="{{ setActivo('proyectos') }}" ><a href="/proyectos"> Proyectos</a></th>
    <th scape='col' class="{{ setActivo('clientes') }}" ><a href="/clientes"> Clientes</a></th>
    <th scape='col' class="{{ setActivo('blog') }}" ><a href="/blog"> Blog</a></th>
    <th scape='col' class="{{ setActivo('contacto') }}"><a href="/contacto"> Contacto</a></th>
    @guest
        <th><a href="{{ route('login') }}"> Login </a></th>
    @else
        <th>
            <a href="#" onclick="event.preventDefault();
                document.getElementByid('logout-form').submit();
            " > Cerrar Sesión </a>
        </th>
    @endguest


</thead>
<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>