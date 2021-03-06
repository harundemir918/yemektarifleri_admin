<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
      <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="https://icons.iconarchive.com/icons/papirus-team/papirus-status/256/avatar-default-icon.png" alt="User Image" width="64" height="64">
        <div>
          <p class="app-sidebar__user-name">{{ auth()->user()->name }}</p>
          <p class="app-sidebar__user-designation">{{ auth()->user()->role }}</p>
        </div>
      </div>
      <ul class="app-menu">
        <li><a class="app-menu__item active" href="{{ route('home') }}"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Ana Sayfa</span></a></li>
        <li><a class="app-menu__item" href="{{ route('recipes') }}"><i class="app-menu__icon fa fa-cutlery"></i><span class="app-menu__label">Tarifler</span></a></li>
        <li><a class="app-menu__item" href="{{ route('categories') }}"><i class="app-menu__icon fa fa-list"></i><span class="app-menu__label">Kategoriler</span></a></li>
        <li><a class="app-menu__item" href="{{ route('users') }}"><i class="app-menu__icon fa fa-users"></i><span class="app-menu__label">Kullanıcılar</span></a></li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-laptop"></i><span class="app-menu__label">UI Elements</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="bootstrap-components.html"><i class="icon fa fa-circle-o"></i> Bootstrap Elements</a></li>
            <li><a class="treeview-item" href="https://fontawesome.com/v4.7.0/icons/" target="_blank" rel="noopener"><i class="icon fa fa-circle-o"></i> Font Icons</a></li>
            <li><a class="treeview-item" href="ui-cards.html"><i class="icon fa fa-circle-o"></i> Cards</a></li>
            <li><a class="treeview-item" href="widgets.html"><i class="icon fa fa-circle-o"></i> Widgets</a></li>
          </ul>
        </li>
      </ul>
    </aside>