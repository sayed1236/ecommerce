<div class="sidebar">
    <nav class="sidebar-nav">
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link" href=""><i class="icon-speedometer"></i> admin
                </a>
            </li>




            <li class="nav-item nav-dropdown">
                <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-puzzle"></i>
                    categories</a>
                <ul class="nav-dropdown-items">
                    <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin.add.categories') }}"><i
                                    class="icon-user-follow"></i>add category</a>
                         <a class="nav-link" href="{{ route('admin.categories.gallery') }}"><i
                                class="icon-people"></i>
                            gallery-categories</a>


                        <a class="nav-link" href="{{ route('admin.categories') }}"><i
                                class="icon-people"></i>
                            categories</a>

                    </li>
                </ul>
            </li>


            <li class="nav-item nav-dropdown">
                <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-puzzle"></i>
                    products</a>
                <ul class="nav-dropdown-items">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('admin.show.products')}}"><i
                                class="icon-user-follow"></i>add product</a>
                        <a class="nav-link" href="{{route('admin.products')}}"><i
                                class="icon-people"></i>
                            products</a>
                             <a class="nav-link" href="{{route('admin.productdetails')}}"><i
                                class="icon-people"></i>
                            products-details</a>
                        <a class="nav-link" href="{{route('admin.productattributes')}}"><i
                                class="icon-people"></i>
                            product-attributes</a>
                        <a class="nav-link" href="{{route('admin.gallery.product')}}"><i
                                class="icon-people"></i>
                            product-gallery</a>

                    </li>
                </ul>
            </li>

            {{--  @can('view', $setting)  --}}
                <li class="nav-item nav-dropdown">
                    <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-puzzle"></i>
                        users</a>
                    <ul class="nav-dropdown-items">
                        <li class="nav-item">
                            {{--  <a class="nav-link" href=""><i
                                    class="icon-user-follow"></i></a>  --}}
                            <a class="nav-link" href="{{route('admin.users')}}"><i
                                    class="icon-people"></i>
                               users</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item nav-dropdown">
                    <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-puzzle"></i>
                        admins</a>
                    <ul class="nav-dropdown-items">
                        <li class="nav-item">
                            {{--  <a class="nav-link" href=""><i
                                    class="icon-user-follow"></i></a>  --}}
                            <a class="nav-link" href="{{route('admin.show.admins')}}"><i
                                    class="icon-people"></i>
                               add-admin</a>
                            <a class="nav-link" href="{{route('admin.admins')}}"><i
                                    class="icon-people"></i>
                               admins</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item nav-dropdown">
                    <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-puzzle"></i>
                        orders</a>
                    <ul class="nav-dropdown-items">
                        <li class="nav-item">
                            <a class="nav-link" href=""><i
                                    class="icon-user-follow"></i>orders</a>
                            <a class="nav-link" href=""><i
                                    class="icon-people"></i>
                                    orders-details</a>
                            <a class="nav-link" href="{{route('admin.admins')}}"><i
                                    class="icon-people"></i>
                               orders-address</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item nav-dropdown">
                    <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-puzzle"></i>
                        images</a>
                    <ul class="nav-dropdown-items">
                        <li class="nav-item">


                            <a class="nav-link" href="{{route('admin.show.images')}}"><i
                                    class="icon-people"></i>
                              add-image </a>
                               <a class="nav-link" href="{{route('admin.index.collection')}}"><i
                                    class="icon-people"></i>
                              add-collection </a>
                        </li>
                    </ul>
                </li>





                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="icon-people"></i>
                        settings</a>
                </li>
            {{--  @endcan  --}}
        </ul>
    </nav>
</div>
