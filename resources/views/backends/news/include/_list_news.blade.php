<div class="row mb-2">
    <div class="col-12">
        <!-- Circle Buttons -->
        <div class="card mb-4">
            <div class="card-body">
                <form id="news-search" action="{{ route('news.index') }}" method="GET" class="form form-horizontal form-search form-inline mb-2">
                    <div class="form-group mb-2 mr-2">
                        <label for="title" class="mr-sm-2">{{ __('news.list.filter') }}:</label>
                        <input type="text" class="form-control mr-1" id="title" 
                            name="title" value="{{ old('title', $request->title)}}"
                            placeholder="title"
                        >
                    </div>
                    <div class="form-group mb-2">
                        <button type="submit" class="btn btn-circle btn-primary"><i class="fa fa-search"></i> @lang('button.search')</button>
                    </div>
                    <div class="form-group d-block w-100">
                        <div class="input-group mw-btn-125" style="width: 120px;">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-hand-pointer"></i></span>
                            </div>
                            <select class="form-control" name="limit" id="limit">
                                @for( $i=10; $i<=50; $i +=10 )
                                    <option value="{{$i}}" 
                                    {{ $request->limit == $i || config('pagination.limit') == $i ? 'selected' : ''}}
                                    >{{ $i }}</option>
                                @endfor
                            </select>
                        </div>
                    </div>
                </form>
                <div class="table-responsive cus-table">
                    <table class="table table-striped table-bordered">
                        <thead class="bg-primary text-light">
                            <tr>
                                <th>{{ __('news.list.thumbnail') }}</th>
                                <th>{{ __('news.list.title') }}</th>
                                <th>{{ __('news.list.category') }}</th>
                                <th class="text-center">{{ __('news.list.active') }}</th>
                                <th class="w-action text-center">{{__('news.list.action')}}</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($news as $blog)
                            <tr>
                                <td class="text-center">
                                    <div class="d-flex justify-content-center">
                                        <div class="thumbnail-cicel">
                                            <img class="thumbnail" src="{{$blog->thumbnail? getUploadUrl($blog->thumbnail, config('upload.news')) : asset('images/no-thumbnail.jpg') }}" alt="{{$blog->title}}" width="45"/>
                                        </div>
                                    </div>
                                </td>
                                <td>{{$blog->title}}</td>
                                <td>{{$blog->category ? $blog->category->name : ""}}</td>
                                <td class="text-center">
                                    <label class="switch">
                                        <input type="checkbox" data-toggle="toggle" data-onstyle="success" name="active"
                                            {{ $blog->is_active == 1 ? 'checked' : '' }}
                                        > 
                                        <span class="slider"><span class="on">ON</span><span class="off">OFF</span>
                                        </span>
                                    </label>
                                </td>                           
                                <td>
                                    <div class="w-action">
                                    <a class="btn btn-sm btn-info btn-circle" 
                                        data-toggle="tooltip" 
                                        data-placement="top"
                                        data-original-title="{{__('button.show')}}"
                                        href="{{route('news.show', $blog->id)}}"
                                    ><i class="far fa-eye"></i>
                                    </a>
                                    <a class="btn btn-sm btn-warning btn-circle" 
                                        data-toggle="tooltip" 
                                        data-placement="top"
                                        data-original-title="{{__('button.edit')}}"
                                        href="{{route('news.edit', $blog->id)}}"
                                    ><i class="far fa-edit"></i>
                                    </a>
                                    <button type="button"
                                        id="btn-deleted"
                                        class="btn btn-sm btn-danger btn-circle"
                                        onclick="deletePopup(this)"
                                        data-id="{{ $blog->id }}"
                                        data-name="{{ $blog->title}}"
                                        data-toggle="modal" data-target="#deletenews"
                                        title="{{__('button.delete')}}"
                                        ><i class="fa fa-trash"></i>
                                    </button>
                                    </div>
                                </td>
                            </tr>
                        @endforeach 
                        </tbody>
                    </table>
                </div>
                <div class="d-flex justify-content-center">
                    {{ $news->appends(request()->query())->links() }}
                </div>
                @if( Session::has('flash_danger') )
                    <p class="alert text-center {{ Session::get('alert-class', 'alert-danger') }}">
                        <span class="spinner-border spinner-border-sm text-darktext-danger align-middle"></span> {{ Session::get('flash_danger') }}
                    </p>
                @endif
            </div>
        </div>
    </div>
</div><!--/row-->
<!--Modal delete news-->
<div class="modal fade" id="deletenews">
    <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">       
        <!-- Modal Header -->
        <div class="modal-header">
            <h5 class="modal-title"><i class="fa fa-trash"></i> {{__('news.confirm_delete')}}</h5>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div> 
        <!-- Modal body -->
        <div class="modal-body text-center">
            <div class="message">{{__('news.confirm_msg') }}</div>
            <div id="modal-name"></div>
        </div>
        <!-- Modal footer -->
        <div class="modal-footer d-flex justify-content-center">
            <form id="delete_news_form" action="{{route('news.destroy')}}" method="POST">
                @csrf
                <input type="hidden" type="form-control" name="news_id">
                <button type="submit" class="btn btn-circle btn-primary">{{__('button.ok')}}</button>
                <button type="button" class="btn btn-circle btn-danger" data-dismiss="modal"
                    onclick="clearData()"
                >{{__('button.close')}}</button>
            </form>
        </div>
    </div>
    </div>
</div>
@push('footer-script')
<script>
    function deletePopup(obj) {
        $('input[name="news_id"]').val($(obj).attr("data-id"));
        $("#modal-name" ).html($(obj).attr("data-name"));
    }

    function clearData() {
        $('input[name="news_id"]').val('');
        $("#modal-name" ).html('');
    }
    
    (function( $ ){
        $("[name='limit']").select2({
            allowClear: false
        }).on('select2:select', function (e) {
            $('#news-search').submit();
        });
    })( jQuery );
    
</script>
@endpush