<div class="row">
    <div class="col-sm-12">
        @if(session()->has('flash.message'))
            <div class="alert alert-{{ session()->get('flash.type') }} alert-dismissible fade show" role="alert"> {!! session()->get('flash.message') !!}
                <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close" data-bs-original-title="" title=""></button>
            </div>
        @endif

        @if(session()->has('errors'))
            <div class="alert alert-secondary alert-dismissible fade show" role="alert"> {{ $errors->first() }}
                <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close" data-bs-original-title="" title=""></button>
            </div>
        @endif
    </div>
</div>  