<div class="col-md-2 sidebar">
    <div class="row">
        <div class="absolute-wrapper"> </div>
        <!-- Menu -->
        <div class="side-menu">
            <nav class="navbar navbar-default" role="navigation">
                <!-- Main Menu -->
                <div class="side-menu-container">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="{{ url('/admin') }}"><span class="glyphicon glyphicon-dashboard"></span>Dashboard</a></li>
                        <li><a href="{{ url('/admin/users') }}"><span class="glyphicon glyphicon-user"></span>Users</a></li>

                        <!-- Dropdown 1-->
                        <li id="dropdown5">
                            <a data-toggle="collapse" href="#dropdown-5">
                                <span class="glyphicon glyphicon-edit"></span>Blog<span class="caret"></span>
                            </a>

                            <div id="dropdown-5" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <ul class="nav navbar-nav">
                                        <li><a href="{{ url('/admin/blogs') }}">All Posts ( show, edit, delete )</a></li>
                                        <li><a href="{{ url('/admin/blogs/create') }}">Add Post</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>

                        <!-- Dropdown 1-->
                        <li id="dropdown6">
                            <a data-toggle="collapse" href="#dropdown-6">
                                <span class="glyphicon glyphicon-cog"></span>Settings<span class="caret"></span>
                            </a>

                            <div id="dropdown-6" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <ul class="nav navbar-nav">
                                        <li><a href="{{ url('/admin/settings/blog') }}">Blog</a></li>
                                        <li><a href="{{ url('/admin/settings/footer') }}">Footer</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</div>
