@extends('backends.layouts.master')
@section('title', __('user.form.title'))
@section('content')
<div id="user-list">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between border-bottom mb-5 pb-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-transparent p-0 mb-0">
                <li class="breadcrumb-item">
                    <a href="{{ route('dashboard') }}">
                        <i class="fas fa-fw fa-tachometer-alt"></i>
                        {{ __('dashboard.title') }}
                    </a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                    <a href="{{ route('user.index') }}">
                        <span class="sub-title">{{ __('user.sub_title') }}</span>
                    </a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                    <span class="sub-title">{{  $user->name }}</span>
                </li>
            </ol>
        </nav>
        <a href="{{route('user.index')}}" 
            class="btn btn-circle btn-primary"
            data-toggle="tooltip" 
            data-placement="left" title="" 
            data-original-title="{{__('user.sub_title')}}"
        ><i class="fas fa-list"></i> {{__('user.sub_title')}}</a>
    </div>
    <div class="row mb-2">
        <div class="col-12 tab-card">
            <!-- Circle Buttons -->
            <div class="card mb-4">
                <div class="card-body">
                    <div class="table-responsive cus-table">
                        <table class="table">
                            <thead>
                            <tr>
                                <th class="text-center">{{__('user.list.thumbnail')}}</th>
                                <th>{{ __('user.list.name') }}</th>
                                <th>{{ __('user.list.email') }}</th>
                                <th>{{ __('user.list.role') }}</th>
                                <th class="text-center">{{ __('user.list.active') }}</th>
                                <th class="w-action text-center">{{__('user.list.action')}}</th>
                            </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center">
                                        <div class="thumbnail-cicel">
                                            <img class="thumbnail" src="{{$user->thumbnail? getUploadUrl($user->thumbnail, config('upload.user')) : asset('images/no-avatar.jpg') }}" alt="{{$user->name}}" width="45"/>
                                        </div>
                                    </td>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->roleType()}}</td>
                                    <td>
                                        <label class="switch">
                                            <input type="checkbox" data-toggle="toggle" data-onstyle="success" name="active"
                                            {{ $user->is_active == 1 ? 'checked' : '' }}
                                            > 
                                            <span class="slider"><span class="on">ON</span><span class="off">OFF</span>
                                            </span>
                                        </label>
                                    </td>                           
                                    <td>
                                        <div class="w-action">
                                        <a class="btn) btn-sm btn-info btn-circle" 
                                            data-toggle="tooltip" 
                                            data-placement="top"
                                            data-original-title="{{__('button.show')}}"
                                            href="{{route('user.show', $user->id)}}"
                                        ><i class="far fa-eye"></i>
                                        </a>
                                        <a class="btn) btn-sm btn-warning btn-circle" 
                                            data-toggle="tooltip" 
                                            data-placement="top"
                                            data-original-title="{{__('button.edit')}}"
                                            href="{{route('user.edit', $user->id)}}"
                                        ><i class="far fa-edit"></i>
                                        </a>
                                        <button type="button"
                                            id="btn-deleted"
                                            class="btn btn-sm btn-danger btn-circle"
                                            onclick="deletePopup(this)"
                                            data-id="{{ $user->id }}"
                                            data-name="{{ $user->name}}"
                                            data-toggle="modal" data-target="#deleteuser"
                                            title="{{__('button.delete')}}"
                                            ><i class="fa fa-trash"></i>
                                        </button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/row-->
</div>
@endsection