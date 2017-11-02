<div class="side-menu">
  <aside class="menu-sidebar m-t-15 m-l-5">
    <p class="menu-label">
      General
    </p>
    <ul class="menu-list">
      <li><a href="{{route('manage.dashboard')}}">Dashboard</a></li>
    </ul>

    <p class="menu-label">
      Administration
    </p>
    <ul class="menu-list">
      <li>
        <a href="{{route('users.index')}}">Manage Users <i class="ion-person-stalker"></i></a>
      </li>

      <li>
        <a href="">Roles &amp; Permissions <i class="ion-ios-cog-outline"></i></a>
      </li>

      <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Items<span class="caret"></span>
          </a>

          <ul class="dropdown-menu" role="menu">
            <li>
              <a href="{{ route('items.index') }}">View Items
              </a>
            </li>

            <li>
              <a href="{{ route('items.create') }}">Add Items
              </a>
            </li>
          </ul>

      <li>
        <a href="{{ route('manage.orders') }}">Orders <i class="ion-bag"></i></a>
      </li>

    </ul>
  </aside>
</div>
