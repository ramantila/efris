<div class="nav-container">
    <nav id="main-menu-navigation" class="navigation-main">

        <div class="nav-item ">
            <a href="{{ url('dashboard') }}"><i class="ik ik-bar-chart-2"></i><span>Dashboard</span></a>
        </div>


        <div class=" @if (Request::is('reports/*')) active open @endif nav-item  has-sub">
            <a href="#"><i class="ik ik-clipboard"></i><span>Comapany</span> </a>
            <div class="submenu-content">
                <a href="{{ url('companies/show') }}"
                    class="menu-item @if (Request::is('')) active @endif">Company</a>

                {{-- <a href="{{ url('companies/searchview') }}"
                    class="menu-item @if (Request::is()) active @endif">Company Search </a> --}}

                <a href="{{ url('company-types/view') }}"
                    class="menu-item @if (Request::is()) active @endif">Company types</a>

                <a href="{{ url('efris/branches/view') }}"
                    class="menu-item @if (Request::is()) active @endif">Branch</a>

                <a href="{{ url('efris/currencies/view') }}"
                    class="menu-item @if (Request::is()) active @endif">Currencies</a>

                <a href="{{ url('efris/measurement-units/view') }}"
                    class="menu-item @if (Request::is()) active @endif">Measurement Units</a>

                <a href="{{ url('efris/payment-modes/view') }}"
                    class="menu-item @if (Request::is()) active @endif">Payment Modes</a>

                <a href="{{ url('efris/tax-codes/view') }}"
                    class="menu-item @if (Request::is()) active @endif">Tax Code</a>

            </div>

        </div>

        <div class=" @if (Request::is('reports/*')) active open @endif nav-item  has-sub">
            <a href="#"><i class="ik ik-package"></i><span>packages</span> </a>
            <div class="submenu-content">
                <a href="{{ url('efris/package/view') }}"
                    class="menu-item @if (Request::is('')) active @endif">Packages</a>

                <a href="{{ url('packages-type/view') }}"
                    class="menu-item @if (Request::is()) active @endif">Package type </a>


            </div>

        </div>

        <div class=" @if (Request::is('reports/*')) active open @endif nav-item  has-sub">
            <a href="#"><i class="ik ik-user"></i><span>Users</span> </a>
            <div class="submenu-content">
                <a href="{{ url('efris/users/view') }}"
                    class="menu-item @if (Request::is('')) active @endif">Users</a>


            </div>

        </div>

        {{-- <div class="@if (Request::is('companies/*')) active @endif nav-item">
            <a href="{{ url('companies/show') }}"><i class="ik ik-command"></i><span>Company</span></a>
        </div>

        <div class="@if (Request::is('companies/*')) active @endif nav-item">
            <a href="{{ url('companies/searchview') }}"><i class="ik ik-command"></i><span>Company search</span></a>
        </div> --}}


        {{-- <div class="@if (Request::is('company-types/*')) active @endif nav-item">
            <a href="{{ url('company-types/view') }}"><i class="ik ik-command"></i><span>Company Type</span></a>
        </div> --}}

        {{-- <div class="@if (Request::is('efris/companyproducts')) active @endif nav-item">
            <a href="{{ url('efris/companyproducts/view') }}"><i class="ik ik-command"></i><span>Company
                    Products</span></a>
        </div> --}}

        {{-- <div class="@if (Request::is('efris/companyproducts')) active @endif nav-item">
            <a href="{{ url('efris/branches/view') }}"><i class="ik ik-command"></i><span>Branch</span></a>
        </div> --}}


        {{-- <div class="@if (Request::is('package/*')) active @endif nav-item">
            <a href="{{ url('efris/package/view') }}"><i class="ik ik-command"></i><span>Package</span></a>
        </div> --}}

        {{-- <div class="@if (Request::is('packages-type/*')) active @endif nav-item">
            <a href="{{ url('packages-type/view') }}"><i class="ik ik-command"></i><span>Package Type</span></a>
        </div> --}}

        {{-- <div class="@if (Request::is('packages-type/*')) active @endif nav-item">
            <a href="{{ url('efris/product-catalogue/view') }}"><i class="ik ik-command"></i><span>Products
                    Catelog</span></a>
        </div> --}}
        {{-- 
        <div class="@if (Request::is('packages-type/*')) active @endif nav-item">
            <a href="{{ url('efris/users/view') }}"><i class="ik ik-command"></i><span>Users</span></a>
        </div> --}}




        {{-- //new --}}


    </nav>

</div>
