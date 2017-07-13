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
                    @foreach ($categories as $category)
                        <tr>
                            <td>{{ $category['id'] }}</td>
                            <td><a href="{{ route('category.update',  ['id' => $category['id']]) }}">{{ $category['name'] }}</a></td>
                            <td><a class="btn btn-danger" href="{{ route('category.destroy', ['id' => $category['id']]) }}">删除</a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
