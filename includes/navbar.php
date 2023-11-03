<ul class="sidebar-nav">
    <li class="sidebar-header">
        -
    </li>

    <li class="sidebar-item <?= ($page === "dashboard") ? 'active' : ''; ?>">
        <a class='sidebar-link' href='index.php'>
            <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
        </a>
    </li>

    <li class="sidebar-item">
        <a data-bs-target="#dashboards" data-bs-toggle="collapse" class="sidebar-link">
            <i class="align-middle" data-feather="users"></i> <span class="align-middle">Farmer Information</span>
        </a>
        <ul id="dashboards" class="sidebar-dropdown list-unstyled" data-bs-parent="#sidebar">
            <li class="sidebar-item  <?= ($page === "farmer_info") ? 'active' : ''; ?>"><a class='sidebar-link' href='farmer_info.php'>Personal Information</a></li>
            <li class="sidebar-item  <?= ($page === "land_info") ? 'active' : ''; ?>"><a class='sidebar-link' href='#'>Land Information</a></li>
            <li class="sidebar-item  <?= ($page === "cultivated_plants") ? 'active' : ''; ?>"><a class='sidebar-link' href='#'>List of Cultivated Plants </a></li>
        </ul>
    </li>

    <li class="sidebar-item  <?= ($page === "agri_assistance") ? 'active' : ''; ?>">
        <a class='sidebar-link' href='#'>
            <i class="align-middle" data-feather="credit-card"></i> <span class="align-middle">Agri Assistance</span>
        </a>
    </li>

    <li class="sidebar-item  <?= ($page === "agri_assistance") ? 'active' : ''; ?>">
        <a class='sidebar-link' href='#'>
            <i class="align-middle" data-feather="list"></i> <span class="align-middle">Agri Beneficiaries</span>
        </a>
    </li>

</ul>