@extends('layouts.dashboard.app')
<?php
$page="admins";
$title=trans('site.admins');
?>
@section('title_page')
{{$title}}
@endsection
@section('content')

    <div class="content-wrapper">

        <section class="content-header">

            <h1>@lang('site.permissions')</h1>

            <ol class="breadcrumb">
                <li><a href="{{ route('dashboard.index') }}"><i class="fa fa-dashboard"></i> @lang('site.dashboard')</a></li>
                <li><a href="{{ route('dashboard.permissions.index') }}"> @lang('site.permissions')</a></li>
                <li class="active">@lang('site.add')</li>
            </ol>
        </section>

        <section class="content">

            <div class="box box-primary">

                <div class="box-header">
                    <h3 class="box-title">@lang('site.add')</h3>
                </div><!-- end of box header -->

                <div class="box-body">

                    @include('partials._errors')

                    <form action="{{ route('dashboard.permissions.store') }}" method="post" enctype="multipart/form-data">

                        {{ csrf_field() }}
                        {{ method_field('post') }}



                        <div class="form-group">
                            <label>@lang('site.name')</label>
                            <input type="text" name="name" class="form-control" value="{{old('name') }}">
                        </div>
                        {{-- <div class="form-group">
                            <label>display_name</label>
                            <input type="text" name="display_name" class="form-control" value="{{old('display_name') }}">
                        </div>
                        <div class="form-group">
                            <label>description</label>
                            <input type="text" name="description" class="form-control" value="{{old('description') }}">
                        </div> --}}


                        <div class="form-group">
                            <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> @lang('site.add')</button>
                        </div>

                    </form><!-- end of form -->

                </div><!-- end of box body -->

            </div><!-- end of box -->

        </section><!-- end of content -->

    </div><!-- end of content wrapper -->

@endsection
