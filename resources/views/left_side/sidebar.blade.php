<div class="nav-container">
    <nav id="main-menu-navigation" class="navigation-main">

        <div class="nav-item ">
            <a href="{{ url('dashboard') }}"><i class="ik ik-bar-chart-2"></i><span>Dashboard</span></a>
        </div>

        <div class="@if (Request::is('companies/*')) active @endif nav-item">
            <a href="{{ url('companies/view') }}"><i class="ik ik-command"></i><span>Company</span></a>
        </div>

        <div class="@if (Request::is('company-types/*')) active @endif nav-item">
            <a href="{{ url('company-types/view') }}"><i class="ik ik-command"></i><span>Company Type</span></a>
        </div>

        <div class="@if (Request::is('sales/*')) active @endif nav-item">
            <a href="{{ url('sales/view') }}"><i class="ik ik-command"></i><span>Package</span></a>
        </div>

        <div class="@if (Request::is('packages-type/*')) active @endif nav-item">
            <a href="{{ url('packages-type/view') }}"><i class="ik ik-command"></i><span>Package Type</span></a>
        </div>

    </nav>

</div>
