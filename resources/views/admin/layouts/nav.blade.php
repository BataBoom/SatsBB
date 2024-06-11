<ul class="nav nav-pills flex-md-column left-navigation">
    <li class="nav-item">
        <a class="nav-link {{Helpers::active_link('admin/user')}}" href="{{url('admin/user/')}}">
            <span data-feather="home"><i class="fas fa-user"></i></span>
            Info <span class="sr-only"></span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{Helpers::active_link('admin/invoices')}}" href="{{url('admin/invoices')}}">
            <span data-feather="home"><i class="fas fa-file-invoice-dollar"></i></span>
            Invoices <span class="sr-only"></span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{Helpers::active_link('admin/payments')}}" href="{{url('admin/payments')}}">
            <span data-feather="home"><i class="fas fa-money-bill-alt"></i></span>
            Payments <span class="sr-only"></span>
        </a>
    </li>
    @if (auth()->user()->super || auth()->user()->admin)
        <li class="nav-item">
            <a class="nav-link {{Helpers::active_link('admin/managers')}}" href="{{route('managers.index')}}">
                <span data-feather="home"><i class="fas fa-users"></i></span>
                Users <span class="sr-only"></span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{Helpers::active_link('admin/sites')}}" href="{{url('admin/sites')}}">
                <span data-feather="home"><i class="fas fa-sitemap"></i></span>
                Sites <span class="sr-only"></span>
            </a>
        </li>
    @endif
</ul>
