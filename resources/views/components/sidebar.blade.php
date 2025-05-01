<div class="offcanvas offcanvas-start" data-bs-backdrop="static"
     tabindex="-1" id="off-can"
     aria-labelledby="staticBackdropLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title fw-bold" id="staticBackdropLabel"><i class="bi bi-bank2"></i> {{config('app.name')}}</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <p class="mb-4 text-dark h6 fw-lighter">Sharp solution for Smart Retail</p>
        <ul class="nav flex-column fw-bold">
            <li class="nav-item mb-2">
                <a class="nav-link text-dark hover-bg-primary" href="{{route('product.index')}}">
                    <i class="bi bi-cart2"></i></i> Product
                </a>
            </li>
            <li class="nav-item mb-2">
                <a class="nav-link text-dark hover-bg-primary" href="{{route('category.index')}}">
                    <i class="bi bi-database-add"></i> Category
                </a>
            </li>
            <li class="nav-item mb-2">
                <a class="nav-link text-dark hover-bg-primary" href="#">
                    <i class="bi bi-basket-fill"></i> Stock
                </a>
            </li>
            <li class="nav-item mb-2">
                <a class="nav-link text-dark hover-bg-primary" href="#">
                    <i class="bi bi-people"></i> Customer
                </a>
            </li>
            <li class="nav-item mb-2">
                <a class="nav-link text-dark hover-bg-primary" href="#">
                    <i class="bi bi-person-hearts"></i> Suppliyers
                </a>
            </li>
            <li class="nav-item mb-2">
                <a class="nav-link text-dark hover-bg-primary" href="#">
                    <i class="bi bi-gear"></i> Setting
                </a>
            </li>
        </ul>
        
        <div>
        </div>
    </div>
</div>