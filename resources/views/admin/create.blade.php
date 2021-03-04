<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="./tab.png">

    <title>{{config('app.name','珊海电业')}}丨音箱产品目录</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{{asset('css/dashbootstrap.min.css')}}" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

</head>

<body>


@include('admin.header')


<div class="row mx-md-n1" style="margin-top: 35px;">

    @foreach($productlists as $productlist)
    <div class="card" style="width: 18rem; margin-left: 10px; margin-bottom: 10px;">
        <img src="{{asset($productlist->img01)}}" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">{{$productlist->Model}}</h5>
            <p class="card-text">{{$productlist->sname}}系列</p>
            <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#a{{$productlist->id}}">修改</button>
            <button type="submit" form="{{$productlist->id}}" class="btn btn-secondary btn-sm">删除</button>

            <form id="{{$productlist->id}}" method="POST" action="{{ route('dashboard.create.destory',$productlist->id) }}">
                <input type="hidden" name="_method" value="DELETE"/>
                {{ csrf_field() }}
            </form>

        </div>
    </div>
    @endforeach



        <div class="card border-success mb-3" style="width: 18rem; margin-left: 10px; margin-bottom: 10px;">
            <div class="card-header">按以下键新增音箱</div>
            <div class="card-body text-success">
                <h5 class="card-title">新增音箱</h5>
                <p class="card-text">新增音箱</p>
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#creat">新增音箱</button>
            </div>
        </div>

</div>


<div class="modal fade" id="creat" tabindex="-1" aria-labelledby="creat" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="creat1">新增音箱</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>


            <form method="POST" action="{{ route('dashboard.create') }}" enctype="multipart/form-data">
                {{ csrf_field() }}
            <div class="modal-body">

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="creat10">音箱型号</span>
                    </div>
                    <input type="text" id="Model" name="Model" class="form-control" placeholder="请输入" aria-label="请输入" aria-describedby="basic-addon1" required>
                </div>

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="creat20">音箱系列</label>
                    </div>
                    <select class="custom-select" id="creat20" name="sname" required>

                        @foreach($serieslists as $serieslist)

                        <option value="{{$serieslist->sname}}">{{$serieslist->sname}}</option>

                        @endforeach
                    </select>
                </div>

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="creat30">音箱类型</span>
                    </div>
                    <input type="text" id="Type" name="Type" class="form-control" placeholder="请输入" aria-label="请输入" aria-describedby="creat30" required>
                </div>

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="creat40">音箱频响</span>
                    </div>
                    <input type="text" id="FResponse" name="FResponse" class="form-control" placeholder="请输入" aria-label="请输入" aria-describedby="creat40" required>
                </div>

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="creat50">音箱功率</span>
                    </div>
                    <input type="text" id="Power" name="Power" class="form-control" placeholder="请输入" aria-label="请输入" aria-describedby="creat50" required>
                </div>

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="creat60">音箱阻抗</span>
                    </div>
                    <input type="text" id="Lmpedance" name="Lmpedance" class="form-control" placeholder="请输入" aria-label="请输入" aria-describedby="creat60" required>
                </div>

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="creat70">音箱灵敏度</span>
                    </div>
                    <input type="text" id="Sensitvity" name="Sensitvity" class="form-control" placeholder="请输入" aria-label="请输入" aria-describedby="creat70" required>
                </div>



                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="img01">上传图片1</span>
                    </div>
                    <div class="custom-file">
                        <input type="file" name="img01" id="imgFile01" aria-describedby="img01" required>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="img02">上传图片2</span>
                    </div>
                    <div class="custom-file">
                        <input type="file" name="img02" id="imgFile02" aria-describedby="img02" required>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="img03">上传图片3</span>
                    </div>
                    <div class="custom-file">
                        <input type="file" name="img03" id="imgFile03" aria-describedby="img03" required>
                    </div>
                </div>

            </div>


            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">关闭</button>
                <button type="submit" class="btn btn-primary">新增</button>
            </div>
            </form>


        </div>
    </div>
</div>


@foreach($productlists as $productlist)
<div class="modal fade" id="a{{$productlist->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">修改</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form method="POST" action="{{route('dashboard.create.update',$productlist->id)}}">
                <input type="hidden" name="_method" value="PUT"/>
                {{ csrf_field() }}
            <div class="modal-body">

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">音箱型号</span>
                    </div>
                    <input id="Model" name="Model" type="text" class="form-control" placeholder="请输入" aria-label="请输入" aria-describedby="basic-addon1" value="{{$productlist->Model}}" required>
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputGroupSelect01">音箱系列</label>
                    </div>
                    <select name="sname" class="custom-select" id="inputGroupSelect01" required>
                        <option value="{{$productlist->sname}}" selected>{{$productlist->sname}}</option>

                        @foreach($serieslists as $serieslist)
                            @if($serieslist->sname == $productlist->sname)

                            @else
                            <option value="{{$serieslist->sname}}">{{$serieslist->sname}}</option>
                            @endif

                        @endforeach
                    </select>
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon3">音箱类型</span>
                    </div>
                    <input id="Type" name="Type" type="text" class="form-control" placeholder="请输入" aria-label="请输入" aria-describedby="basic-addon3" value="{{$productlist->Type}}" required>
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon4">音箱频响</span>
                    </div>
                    <input id="FResponse" name="FResponse" type="text" class="form-control" placeholder="请输入" aria-label="请输入" aria-describedby="basic-addon4" value="{{$productlist->FResponse}}" required>
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon5">音箱功率</span>
                    </div>
                    <input id="Power" name="Power" type="text" class="form-control" placeholder="请输入" aria-label="请输入" aria-describedby="basic-addon5" value="{{$productlist->Power}}" required>
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon6">音箱阻抗</span>
                    </div>
                    <input id="Lmpedance" name="Lmpedance" type="text" class="form-control" placeholder="请输入" aria-label="请输入" aria-describedby="basic-addon6" value="{{$productlist->Lmpedance}}" required>
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon7">音箱灵敏度</span>
                    </div>
                    <input id="Sensitvity" name="Sensitvity" type="text" class="form-control" placeholder="请输入" aria-label="请输入" aria-describedby="basic-addon7" value="{{$productlist->Sensitvity}}" required>
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
@endforeach


<!--javascript bootstrap   -->
<script src="{{asset('js/jquery.slim.min.js')}}"></script>
<script src="{{asset('js/dashpopper.min.js')}}"></script>
<script src="{{asset('js/dashbootstrap.min.js')}}"></script>
<script>
    var classVal = document.getElementById("speakerslist").getAttribute("class");
    var shop = document.getElementById('speakersproduct');
    shop.className += ' active';
    classVal = classVal.replace("active","");
    document.getElementById("speakerslist").setAttribute("class",classVal );
</script>
</body>
</html>
