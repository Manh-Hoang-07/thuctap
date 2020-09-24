<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>quản lý báo cáo</h1>
    <div>
        <form action="{{isset($report)? route('student.report.save',['id'=>"$report->id"]) :route('student.report.save')}}"
              method="post"enctype="multipart/form-data">
            @csrf
           tên báo cáo <input type="text" name="title" value="{{old('title',isset($report)? $report->title :'')}}"><br>
           mô tả <input type="text" name="contents"value="{{old('contents',isset($report)? $report->content :'')}}"><br>
            @if(isset($topic_id))
                <input type="hidden" value="{{$topic_id}}" name="topicId" class="topicId"><br>
            @endif
            @if(isset($report))
                đổi file báo cáo
            @else
                file
            @endif
                <input type="file" name="file" accept=".docx"><br>
            <input type="submit"><br>
        </form>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
</body>
</html>
