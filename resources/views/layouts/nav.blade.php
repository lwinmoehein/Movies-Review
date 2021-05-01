<nav>
    <a href="#0" aria-label="forecastr logo" class="logo">
        <svg width="140" height="49">
            <use xlink:href="#logo"></use>
        </svg>
    </a>
    <button class="toggle-mob-menu" aria-expanded="false" aria-label="open menu">
        <svg width="20" height="20" aria-hidden="true">
            <use xlink:href="#down"></use>
        </svg>
    </button>
    <ul class="admin-menu">
        <li class="menu-heading">
            <h3>Admin Panel</h3>
        </li>
        <li>
            <a href="{{route('serie.index')}}">
                <i class="fa fa-film"></i>
                <span>Series</span>
            </a>
        </li>
        <li>
            <a href="{{route('movie.index')}}">
                <i class="fa fa-film"></i>
                <span>Movies</span>
            </a>
        </li>
        <li>
            <a href="{{route('tag.index')}}">
                <i class="fa fa-tags"></i>
                <span>Tags</span>
            </a>
        </li>
        <li>
            <a href="{{route('country.index')}}">
                <i class="fa fa-globe"></i>
                <span>Countries</span>
            </a>
        </li>
        <li>
            <a href="{{route('year.index')}}">
                <i class="fa fa-calendar"></i>
                <span>Years</span>
            </a>
        </li>


    </ul>
</nav>
