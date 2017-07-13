@extends('../layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <table class="table">
                    <caption>标签列表</caption>
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>名称</th>
                        <th>操作</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($tags as $tag)
                        <tr>
                            <td>{{ $tag['id'] }}</td>
                            <td><a href="{{ route('tag.update',  ['id' => $tag['id']]) }}">{{ $tag['name'] }}</a></td>
                            <td><a class="btn btn-danger" href="{{ route('tag.destroy', ['id' => $tag['id']]) }}">删除</a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
