<div class="col-xl-4 col-md-6 mb-4">
    <div class="card shadow h-100 py-2 border-0">
        <div class="card-body d-flex align-items-center">
            <div class="me-3">
                <i class="bi {{ $icon ?? 'bi-box' }} text-primary" style="font-size:2.5rem;"></i>
            </div>
            <div>
                <div class="fw-bold mb-1">{{ $title }}</div>
                <div class="text-muted small mb-2">{{ $desc ?? '' }}</div>
                <a href="{{ $link }}" class="btn btn-sm btn-outline-primary">Acessar</a>
            </div>
        </div>
    </div>
</div> 