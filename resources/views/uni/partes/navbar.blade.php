 

<nav>
    <div class="nav-wrapper {{$cor_principal}}">
        <div class="container">
            <a href="/" class="brand-logo"><img src="{{url('/imagem/arquivo/logo.png')}}" height="55px"/></a>
        </div>
        <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">
            <li><a href="sass.html"></a></li>
            <li><a href="badges.html"></a></li>
            <li><a href="collapsible.html"></a></li>
            @if(!session()->get('logado'))
            <li><a href="/login" class="waves-effect waves-{{$cor_btn}} btn-flat {{$cor_btn}} btn-small">Entrar ou Cadastrar</a></li>
            @else
            <li><a href="/perfil/sair" class="waves-effect waves-{{$cor_btn}} btn-flat {{$cor_btn}} btn-small">Sair</a></li>
            @endif
        </ul>
    </div>
</nav>

<ul class="sidenav" id="mobile-demo">
    <li><a href="sass.html">Sass</a></li>
    <li><a href="badges.html">Components</a></li>
    <li><a href="collapsible.html">Javascript</a></li>
    <li><a href="mobile.html"><i class="material-icons">add</i></a></li>
</ul>