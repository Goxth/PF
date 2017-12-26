{{-- Side Navigation --}}
<div class="col-md-2">
    <div class="sidebar content-box" style="display: block;">
        <ul class="nav">
            <!-- Main menu -->
            <li class="current"><a href="{{route('admin.index')}}"><i class="glyphicon glyphicon-home"></i>
                    Dashboard</a></li>
            <li class="submenu">
                <a href="#">
                    <i class="glyphicon glyphicon-list"></i> Productos
                    <span class="caret pull-right"></span>
                </a>
                <!-- Sub menu -->
                <ul>
                    <li><a href="{{route('product.index')}}">Productos</a></li>
                    <li><a href="{{route('product.create')}}">Añadir Productos</a></li>
                </ul>
            </li>
            <li class="submenu">
                <a href="#">
                    <i class="glyphicon glyphicon-list"></i> Categoria
                    <span class="caret pull-right"></span>
                </a>
                <!-- Sub menu -->
                <ul>
                    <li><a href="{{route('category.index')}}">Añadir Categoría</a></li>
                </ul>
            </li>
            <li class="submenu">
                <a href="#">
                    <i class="glyphicon glyphicon-list"></i> Ordenes
                    <span class="caret pull-right"></span>
                </a>
                <!-- Sub menu -->
                <ul>
                    <li><a href="{{url('admin/ordens/pendientes')}}">Ordenes Pendientes</a></li>
                    <li><a href="{{url('admin/ordens/entregadas')}}">Ordenes Entregadas</a></li>
                    <li><a href="{{url('admin/ordens')}}">Todas las Ordenes</a></li>
                </ul>
            </li>
            <li>
            <a href="{{route('messages.index')}}">
                    <i class="glyphicon glyphicon-list"></i> Mensajes
                </a>
            </li>
        </ul>
    </div>
</div> <!-- ADMIN SIDE NAV-->