<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="./tab.png">

    <title>珊海电业网站后台</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{{asset('css/dashbootstrap.min.css')}}" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

</head>

<body>


@include('admin.header')


<div style="margin-left: 60px;margin-right: 50px;margin-top: 60px">

    <table class="table table-bordered">
        <thead class="thead-dark">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">音箱系列名称</th>
            <th scope="col">音箱型号</th>
            <th scope="col">操作</th>
        </tr>
        </thead>
        <tbody>


        @foreach($recommends as $recommend)
        @foreach($productlists as $productlist)

       @if($recommend->recommendname == $productlist->Model)
        <tr>
            <th scope="row">{{$recommend->id}}</th>
            <td>{{$productlist->sname}}</td>
            <td>{{$productlist->Model}}</td>
            <td>
                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#a{{$recommend->id}}">修改</button>
                <button type="submit" form="{{$recommend->id}}" class="btn btn-secondary btn-sm">删除</button>
            </td>
        </tr>


        <div class="modal fade" id="a{{$recommend->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">修改</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <form method="POST" action="{{route('dashboard.recommend.update',$recommend->id)}}">
                        <input type="hidden" name="_method" value="PUT"/>
                        {{ csrf_field() }}
                    <div class="modal-body">


                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputGroupSelect01">精品音箱型号</label>
                            </div>
                            <select class="custom-select" id="inputGroupSelect01" name="recommendname" required>
                                <option value="{{$recommend->recommendname}}" selected>{{$recommend->recommendname}}</option>

                                @foreach($productlists as $productlist)
                                    @if($productlist->Model == $recommend->recommendname)

                                    @else
                                        <option value="{{$productlist->Model}}">{{$productlist->Model}}</option>
                                    @endif

                                @endforeach
                            </select>
                        </div>


                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">关闭</button>
                        <button type="submit" class="btn btn-primary">保存</button>
                    </div>
                    </form>

                </div>
            </div>
        </div>
       @endif


        @endforeach
        @endforeach


       <tr>
       <th scope="row"></th>
       <td></td>
       <td></td>
       <td>
       <button type="button" class="btn btn-primary btn-sm btn-success" data-toggle="modal" data-target="#create">新增精品音箱</button>
       </td>
       </tr>




        </tbody>
    </table>

</div>


<div style="margin-left: 60px;margin-right: 50px;margin-top: 60px">
<div class="jumbotron">
    <h1 class="display-4">关于我们</h1>
    <p class="lead">请在下面空白框内输入内容</p>

    <hr class="my-4">

    <div class="input-group" style="margin-bottom: 30px">
        <div class="input-group-prepend">
            <span class="input-group-text">关于我们</span>
        </div>
        <textarea class="form-control" aria-label="With textarea"></textarea>
    </div>
    <a class="btn btn-primary btn-lg" href="#" role="button">保存</a>
</div>
</div>





<form method="POST" action="{{ route('dashboard.recommend') }}">
    {{ csrf_field() }}
<div class="modal fade" id="create" tabindex="-1" aria-labelledby="createLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createlabel">新增</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputGroupSelect01">精品音箱型号</label>
                    </div>
                    <select class="custom-select" id="inputGroupSelect01" name="recommendname" required>

                        @foreach($productlists as $productlist)

                                    <option value="{{$productlist->Model}}">{{$productlist->Model}}</option>

                            @endforeach

                    </select>
                </div>

            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">关闭</button>
                <button type="submit" class="btn btn-primary btn-success">新增</button>
            </div>

        </div>
    </div>
</div>
</form>

@foreach($recommends as $recommend)
    <form id="{{$recommend->id}}" method="POST" action="{{ route('dashboard.recommend.destory',$recommend->id) }}">
        <input type="hidden" name="_method" value="DELETE"/>
        {{ csrf_field() }}
    </form>
@endforeach

<!--javascript bootstrap   -->
<script src="{{asset('js/jquery.slim.min.js')}}"></script>
<script src="{{asset('js/dashpopper.min.js')}}"></script>
<script src="{{asset('js/dashbootstrap.min.js')}}"></script>
<script>
    var classVal = document.getElementById("speakerslist").getAttribute("class");
    var shop = document.getElementById('speakersrecommendproduct');
    shop.className += ' active';
    classVal = classVal.replace("active","");
    document.getElementById("speakerslist").setAttribute("class",classVal );
</script>
</body>
</html>
