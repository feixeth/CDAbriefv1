<nav class="navbar">
    <ul>
        <li class="{{ Request::is('/') ? 'active' : '' }}"><a href="{{ route('accueil') }}" class="{{ Request::is('/') ? 'bold' : '' }}">Accueil</a></li>
        <li class="{{ Request::is('soins-du-corps') ? 'active' : '' }}"><a href="{{ route('soins-du-corps') }}" class="{{ Request::is('soins-du-corps') ? 'bold' : '' }}">Soins du corps</a></li>
        <li class="{{ Request::is('soins-du-visage') ? 'active' : '' }}"><a href="{{ route('soins-du-visage') }}" class="{{ Request::is('soins-du-visage') ? 'bold' : '' }}">Soins du visage</a></li>
        <li class="{{ Request::is('maquillage') ? 'active' : '' }}"><a href="{{ route('maquillage') }}" class="{{ Request::is('maquillage') ? 'bold' : '' }}">Maquillage</a></li>
        <li class="{{ Request::is('beaute-des-mains') ? 'active' : '' }}"><a href="{{ route('beaute-des-mains') }}" class="{{ Request::is('beaute-des-mains') ? 'bold' : '' }}">Beauté des mains</a></li>
    </ul>
</nav>
<br>

