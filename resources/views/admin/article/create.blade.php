@extends('layouts.app') @section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">新增文章</div>
                <div class="panel-body">
                    @if(count($errors) > 0)
                    <div class="alert alert-danger">
                        <strong>新增失敗</strong>　輸入不符合規定 {!! implode('<br>', $error->all()) !!}
                    </div>
                    @endif

                    <form action="{{url('admin/article')}}" method="POST">
                        {!! csrf_field() !!}
                        <input type="text" name="title" class="form-control" required="required" placeholder="請輸入標題">
                        <br/>
                        <textarea name="body" rows="10" class="form-control" requirde="required" placeholder="請輸入內容"></textarea>
                        <br/>
                        <button class="btn btn-lg btn-info">新增文章</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection