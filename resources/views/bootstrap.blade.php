@if (alert()->has())
    <div class="alert alert-{{ alert()->style() }} alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>

        {!! alert()->message() !!}
    </div>
@endif
