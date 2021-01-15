<div class="col-xl-3 col-lg-6">
    <div class="card card-stats mb-4 mb-xl-0">
        <div class="card-body">
            <div class="row">
                <div class="col">
                    <h5 class="card-title text-uppercase text-muted mb-0">Sales</h5>
                    <span class="h2 font-weight-bold mb-0">{{ $total }}</span>
                </div>
                <div class="col-auto">
                    <div class="icon icon-shape bg-yellow text-white rounded-circle shadow">
                        <i class="fas fa-users"></i>
                    </div>
                </div>
            </div>
            <p class="mt-3 mb-0 text-muted text-sm">
                @if ($balance > 0)
                    <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> {{ $balance }}%</span>
                @else
                    <span class="text-warning mr-2"><i class="fas fa-arrow-down"></i> {{ $balance }}%</span>
                @endif
                <span class="text-nowrap">Since yesterday</span>
            </p>
        </div>
    </div>
</div>
