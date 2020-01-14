@extends('backends.layouts.master')
@section('title', __('news.title'))
@push('header-style')
@endpush
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
                    <span class="sub-title">{{ __('news.sub_title') }}</span>
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
    <form class="form-main" action="{{route('news.update', $news->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-2">
            <div class="col-8 tab-card">
                <!-- Circle Buttons -->
                <div class="card mb-4">
                    <div id="news-list-left" class="card-body collapse show">
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div id="add-news-rigt" class="tab-pane active">
                                <div class="form-group">
                                    <label for="title">{{__('news.list.title')}}:</label>
                                    <input id="title" type="text" class="form-control {{ $errors->has('title') ? ' is-invalid' : '' }}" 
                                        placeholder="title"
                                        name="title"
                                        value="{{ old('title', $news->title) }}"
                                    >
                                    @if ($errors->has('title'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('title') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group mb-2">
                                    <label for="permalink"><strong>Permalink: </strong><span>{!! url('/news').'/' !!}</span></label>
                                    <input id="permalink" class="form-control" type="text" placeholder="permalink" disabled 
                                        value="{{strSlug(old('title', $news->title))}}">
                                </div>
                                <div class="form-group content">
                                    <textarea class="form-control textarea" id="post_content" rows="10" name="content">{!! old('content', $news->content) !!}</textarea>
                                </div>
                            </div><!--/tab-add-news-->
                        </div>
                    </div>
                    <div class="card-footer">
                        <span><i class="fas fa-user-md"></i> Creator: {{ Auth::user() ? Auth::user()->name : '' }}</span>
                    </div>
                </div>
            </div>
            <div class="col-4 tab-card">
                <!-- Circle Buttons -->
                <div class="card mb-4">
                    <div id="news-list-right" class="card-body collapse show">
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div id="add-news-right" class="tab-pane active">
                                <div class="form-group">
                                    <div class="date-public"><i class="far fa-calendar-alt"></i> Date:{{ date('Y-M-d') }}</div>
                                    <div class="form-group modal-footer mt-3 justify-content-center">
                                        <button type="submit" class="btn btn-circle btn-light w-btn-125 mr-2" name="is_active" value="0">{{__('button.save_draft')}}</button>
                                        <button type="submit" class="btn btn-circle btn-primary w-btn-125 mr-2" name="is_active" value="1">{{__('button.save')}}</button>
                                    </div>
                                </div>
                                <div class="form-group select-group">
                                    <label for="category text-center"><i class="fas fa-tags"></i> {{__('news.list.category')}}</label>
                                    <select class="form-control {{ $errors->has('category_id') ? ' is-invalid' : '' }}" name="category_id" id="category_id">
                                        @foreach($categories as $id => $name)
                                            <option value="{{ $id }}" {{ $id == $news->category_id ? 'selected' : '' }}>{{ $name }}</option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('category_id'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('category_id') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="thumbnail text-center"><i class="fas fa-image"></i> {{__('button.thumbnail')}}</label>
                                    <div class="upload-profile img-upload">
                                        <div class="img-file-tab">
                                            <div>
                                                <span class="btn btn-circle btn-file img-select-btn btn-block">
                                                    <i class="fa fa-fw fa-upload"></i> <span>{{__('button.add_thumbnail')}}</span>
                                                    <input type="file" name="thumbnail">
                                                </span>
                                            </div>
                                            <div class="d-flex justify-content-center align-items-center">
                                                <img class="thumbnail" src="{{$news->thumbnail? getUploadUrl($news->thumbnail, config('upload.news')) : asset('images/no-thumbnail.jpg') }}"/>
                                                <span class="btn btn-circle img-remove-btn"><i class="fa fa-fw fa-times"></i> {{__('button.delete')}}</span>
                                            </div>
                                        </div>
                                    </div>
                                    @if ($errors->has('thumbnail'))
                                        <div class="text-danger">
                                            <strong>{{ $errors->first('thumbnail') }}</strong>
                                        </div>
                                    @endif
                                </div>
                            </div><!--/tab-add-news-->
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/row-->
    </form><!--/form-main-->
</div>
@endsection
@push('footer-script')
<script type="text/javascript" src="{{asset('/js/imageupload.js')}}"></script>
<script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
<script>
    // script for upload image
    $('.img-upload').imgUpload();
    $(function(){
        $("#category_id").select2({
            allowClear: false
        });
    });
    //Getting and Clear an input field's value on keydown
    $(function(){
        $('#title').keydown(function(){
            setTimeout(function() {
                var value = $('#title').val();
                $('#permalink').val(value);
            }, 50);
        });
        // ceditor Integration set method
        var options = {
            filebrowserImageBrowseUrl: '{{ asset("laravel-filemanager?type=Images") }}',
            filebrowserImageUploadUrl: '{{ asset("laravel-filemanager/upload?type=Images&_token=") }}{{csrf_token()}}',
            filebrowserBrowseUrl: '{{ asset("laravel-filemanager?type=Files") }}',
            filebrowserUploadUrl: '{{ asset("/laravel-filemanager/upload?type=Files&_token=") }}{{csrf_token()}}'
        };
        // Replace by ID
        CKEDITOR.replace('post_content', options);
        CKEDITOR.config.allowedContent = true;
    });
</script>
@endpush