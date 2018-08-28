@extends('layouts.app')

@section('content')
<div class="container">
    @include('partials.alerts-bar')
    @include('partials.user-nav-bar', ['view' => 'dataset'])
    <p> {{ uctrans('custom.confirm_resource_import') }} </p>
    <div class="col-xs-12 m-t-lg">
        <form
            class="form-horizontal"
            method="POST"
            action="{{ url('/user/importElastic') }}"
        >
            {{ csrf_field() }}
            <p> {{ uctrans('custom.resource_no_visualization') }} </p>
            <div class="form-group row">
                <div class="col-sm-12 text-right m-b-sm">
                    <input type="hidden" name="resource_uri" value="{{ $resourceUri }}">
                    <button name="ready_data" type="submit" class="m-l-md btn btn-primary">{{ __('custom.save') }}</button>
                    <a
                        type="button"
                        href="{{ route('cancelImport', ['uri' => $resourceUri]) }}"
                        class="m-l-md btn btn-danger">{{ __('custom.cancel') }}
                    </a>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection