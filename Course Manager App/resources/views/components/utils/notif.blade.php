@foreach (['success', 'warning', 'danger','primary'] as $status)
    @if (session($status))
    <div class="col-md-12 m-2 d-flex justify-content-center align-items-center" style="margin-bottom:-200px">
        <div class="alert alert-{{ $status }} alert-dismissable custom-{{ $status }}-box" role="alert">
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            <strong> {{ session($status) }}</strong>
        </div>
    </div>
    @endif
@endforeach
