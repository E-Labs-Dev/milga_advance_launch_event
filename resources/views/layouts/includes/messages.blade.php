@if (session()->has('failure'))
    <div class="alert alert-danger" style="margin-top: 14px;">
        {{ session()->get('failure') }}
    </div>
@endif
@if (session()->has('success'))
    <div class="alert alert-success" style="margin-top: 14px;">
        {{ session()->get('success') }}
    </div>
@endif
