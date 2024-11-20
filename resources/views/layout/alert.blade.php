

<div class="alert alert-{{ $class }} alert-dismissible fade show">
    <h4 class="alert-heading"><u>{{ $judul }}</u></h4>
    {{ $slot }}
    <button class="btn-close" type="button" data-bs-dismiss="alert" ></button>
</div>