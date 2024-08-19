<div class="sidebar d-flex flex-column flex-shrink-0 p-3 text-white bg-dark" style="width: 280px;">
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
        <svg class="bi me-2" width="40" height="32">
            <!-- Replace with your SVG icon or use <i> tags for FontAwesome -->
            <use xlink:href="#bootstrap"></use>
        </svg>
        <span class="fs-4">Sidebar</span>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
            <a class="nav-link <?= isset($data['module']) && $data['module'] === 'dashboard' ? 'active' : '' ?>" href="<?= URL ?>dashboard">Dashboard</a>
        </li>
        <li class="nav-item">
            <a class="nav-link <?= isset($data['module']) && $data['module'] === 'users' ? 'active' : '' ?>" href="<?= URL ?>users">Usuarios</a>
        </li>
        <li class="nav-item">
            <a class="nav-link <?= isset($data['module']) && $data['module'] === 'products' ? 'active' : '' ?>" href="<?= URL ?>products">Products</a>
        </li>
        <li class="nav-item">
            <a class="nav-link <?= isset($data['module']) && $data['module'] === 'customers' ? 'active' : '' ?>" href="<?= URL ?>customers">Customers</a>
        </li>
    </ul>
    <hr>
    <div class="dropdown">
        <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="<?= URL ?>public/images/Jose-Daniel-GO-3.jpg" alt="" width="32" height="32" class="rounded-circle me-2">
            <strong>mdo</strong>
        </a>
        <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
            <li><a class="dropdown-item" href="#">New project...</a></li>
            <li><a class="dropdown-item" href="#">Settings</a></li>
            <li><a class="dropdown-item" href="#">Profile</a></li>
            <li>
                <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="#">Sign out</a></li>
        </ul>
    </div>
</div>