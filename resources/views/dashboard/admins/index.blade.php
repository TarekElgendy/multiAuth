@extends('layouts.dashboard.app')
<?php
$page = 'admins';
$title = trans('dash.admins');
// to hide any section please type -> close
$section_power = '';
$section_show = '';

?>
@section('title_page')
    {{ $title }}
@endsection
@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <h1>@lang('dash.admins')</h1>
            <ol class="breadcrumb">
                <li><a href="{{ route('dashboard.index') }}"><i class="fa fa-dashboard"></i> @lang('dash.dashboard')</a>
                </li>
                <li class="active">@lang('dash.admins')</li>
            </ol>
        </section>
        <section class="content">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title" style="margin-bottom: 15px">@lang('dash.admins') <small>@lang('dash.total_search')(
                            {{ $admins->count() }} ) </small></h3>
                    <form action="{{ route('dashboard.admins.index') }}" method="get">
                        <div class="row">
                            <div class="col-md-4">
                                <input type="text" name="search" class="form-control" placeholder="@lang('dash.search')"
                                    value="{{ request()->search }}">
                            </div>
                            <div class="col-md-4">
                                <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i>
                                    @lang('dash.search')</button>
                                @if (auth()->user()->hasPermission('admins-create'))
                                    <a href="{{ route('dashboard.admins.create') }}" class="btn btn-primary"><i
                                            class="fa fa-plus"></i> @lang('dash.add')</a>
                                @else
                                    <a href="#" class="btn btn-primary disabled"><i class="fa fa-plus"></i>
                                        @lang('dash.add')</a>
                                @endif
                            </div>
                            <div class="col-md-4 {{ $section_power == 'close' ? 'hidden' : '' }}">
                                <a href="{{ route('dashboard.permissions.index') }}" class="btn btn-primary"><i
                                        class="fa fa-plus"></i>@lang('dash.permissions')</a>
                            </div>
                        </div>
                    </form><!-- end of form -->
                </div><!-- end of box header -->
                <div class="box-body">
                    @if ($admins->count() > 0)
                        <table class="table table-hover" id="data_table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>@lang('dash.name')</th>
                                    <th>@lang('dash.phone')</th>
                                    <th>@lang('dash.email')</th>



                                    <th>@lang('dash.image')</th>

                                    <th>@lang('dash.action')</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($admins as $index => $admin)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>{{ $admin->name }}</td>
                                        <td>{{ $admin->phone }}</td>
                                        <td>{{ $admin->email }} </td>

                                        <td><img src="{{ $admin->image_path }}" style="width: 100px;" class="img-thumbnail"
                                                alt="">
                                        </td>

                                        <td>


                                            @if (auth()->user()->hasPermission('admins-update'))
                                                <a href="{{ route('dashboard.admins.edit', $admin->id) }}"
                                                    class="btn btn-info btn-sm"><i class="fa fa-edit"></i>
                                                    @lang('dash.edit')</a>
                                            @else
                                                <a href="#" class="btn btn-info btn-sm disabled"><i
                                                        class="fa fa-edit"></i>
                                                    @lang('dash.edit')</a>
                                            @endif
                                            @if (auth()->user()->hasPermission('admins-delete'))
                                                <form action="{{ route('dashboard.admins.destroy', $admin->id) }}"
                                                    method="post" style="display: inline-block">
                                                    {{ csrf_field() }}
                                                    {{ method_field('delete') }}
                                                    <button type="submit" class="btn btn-danger delete btn-sm"><i
                                                            class="fa fa-trash"></i> @lang('dash.delete')</button>
                                                </form><!-- end of form -->
                                            @else
                                                <button class="btn btn-danger btn-sm disabled"><i class="fa fa-trash"></i>
                                                    @lang('dash.delete')</button>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table><!-- end of table -->
                    @else
                        <label for="" class="alert alert-danger col-xs-12 text-center">@lang('dash.no_data_found')</label>
                    @endif
                </div><!-- end of box body -->
            </div><!-- end of box -->
        </section><!-- end of content -->
    </div><!-- end of content wrapper -->
@endsection
