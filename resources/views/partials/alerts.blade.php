@if(Session::has('notice') || isset($notice))
    <div class="alert alert-{{ $notice['alert'] or Session::get('notice.alert') }} alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert">
            <span aria-hidden="true">&times;</span><span class="sr-only">Fechar</span>
        </button>
        {{ $notice['message'] or Session::get('notice.message') }}
    </div>
@endif