@extends('backends.layouts.master')
@section('title', __('news.title'))
@section('content')
<div id="news-list">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between border-bottom mb-3 pb-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-transparent p-0 mb-0">
                <li class="breadcrumb-item">
                    <a href="{{ route('dashboard') }}">
                        <i class="fas fa-fw fa-tachometer-alt"></i>
                        {{ __('dashboard.title') }}
                    </a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                    <a href="{{ route('news.index') }}">
                        <span class="sub-title">{{ __('news.sub_title') }}</span>
                    </a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                    <span class="sub-title">{{  $news->name }}</span>
                </li>
            </ol>
        </nav>
        <a href="{{route('news.index')}}" 
            class="btn btn-circle btn-primary"
            data-toggle="tooltip" 
            data-placement="left" title="" 
            data-original-title="{{__('news.sub_title')}}"
        ><i class="fas fa-list"></i> {{__('news.sub_title')}}</a>
    </div>
    <div class="row mb-2">
        <div class="col-12 tab-card">
            <!-- Circle Buttons -->
            <div class="card mxy-4">
                <div class="card-body">
                    <div class="table-responsive cus-table">
                        <table class="table table-show table-hover">
                            <tbody class="border">
                                <tr>
                                    <th>{{__('news.list.thumbnail')}}</th>
                                    <td>
                                        <div class="thumbnail-cicel" style="width:100px; height:100px;">
                                            <img class="thumbnail" src="{{$news->thumbnail? getUploadUrl($news->thumbnail, config('upload.news')) : asset('images/no-avatar.jpg') }}" alt="{{$news->title}}" width="45"/>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th>{{ __('news.list.news_title') }}</th>
                                    <td>{{$news->title}}</td>
                                </tr>
                                <tr>
                                    <th>{{ __('news.list.category') }}</th>
                                    <td>{{$news->category ? $news->category->name : ''}}</td>
                                </tr>
                                <tr>
                                    <th>{{ __('news.list.active') }}</th>
                                    <td>
                                        <label class="switch">
                                            <input type="checkbox" data-toggle="toggle" data-onstyle="success" name="active"
                                            {{ $news->is_active == 1 ? 'checked' : '' }}
                                            disabled
                                            > 
                                            <span class="slider"><span class="on">ON</span><span class="off">OFF</span>
                                            </span>
                                        </label>
                                    </td>
                                </tr>
                                <tr>
                                    <th class="w-20">{{__('news.list.action')}}</th>                
                                    <td>
                                        <div class="w-100">
                                        <a class="btn btn-sm btn-info btn-circle" 
                                            data-toggle="tooltip" 
                                            data-placement="top"
                                            data-original-title="{{__('button.show')}}"
                                            href="{{route('news.show', $news->id)}}"
                                        ><i class="far fa-eye"></i>
                                        </a>
                                        <a class="btn btn-sm btn-warning btn-circle" 
                                            data-toggle="tooltip" 
                                            data-placement="top"
                                            data-original-title="{{__('button.edit')}}"
                                            href="{{route('news.edit', $news->id)}}"
                                        ><i class="far fa-edit"></i>
                                        </a>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="form-group d-inline-flex mb-3">
                        <a href="{{route('news.edit', $news->id)}}" class="btn btn-circle btn-primary w-btn-125 mr-2">{{__('button.edit')}}</a>
                        <a href="{{route('news.index')}}" class="btn btn-circle btn-secondary w-btn-125">{{__('button.return')}}</a>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/row-->
</div>
@endsection