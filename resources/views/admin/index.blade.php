<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="./tab.png">

    <title>{{config('app.name','珊海电业')}}丨珊海电业网站后台</title>

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
        <th scope="col">音箱数量</th>
        <th scope="col">操作</th>
      </tr>
      </thead>
      <tbody>

      @foreach($serieslists as $serieslist)
      <tr>
        <th scope="row">{{$serieslist->id}}</th>
        <td>{{$serieslist->sname}}系列</td>

        <td>{{$serieslist->sname_count}}数量</td>

        <td>
          <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#a{{$serieslist->id}}">修改</button>



                <button type="submit" form="{{$serieslist->id}}" class="btn btn-secondary btn-sm">删除</button>


        </td>
      </tr>




      <div class="modal fade" id="a{{$serieslist->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">修改</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                  </div>


                  <form method="POST" action="{{route('dashboard.update',$serieslist->id)}}">
                      <input type="hidden" name="_method" value="PUT"/>
                      {{ csrf_field() }}
                  <div class="modal-body">

                      <div class="input-group mb-3">
                          <div class="input-group-prepend">
                              <span class="input-group-text" id="basic-addon1">音箱系列名称</span>
                          </div>

                          <input type="text" id="sname" name="sname" class="form-control" placeholder="请输入" aria-label="请输入" aria-describedby="basic-addon1" value="{{$serieslist->sname}}">

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


      <tr>
        <th scope="row"></th>
        <td></td>
        <td></td>
        <td>
          <button type="button" class="btn btn-primary btn-sm btn-success" data-toggle="modal" data-target="#create">新增音箱系列</button>
        </td>
      </tr>
      </tbody>
    </table>

  </div>







  <form method="POST" action="{{ route('dashboard.store') }}">
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
              <span class="input-group-text" id="create1">音箱系列名称</span>
            </div>
            <input type="text" id="sname" name="sname" class="form-control" placeholder="请输入" aria-label="请输入" aria-describedby="create1" required>
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

  @foreach($serieslists as $serieslist)
  <form id="{{$serieslist->id}}" method="POST" action="{{ route('dashboard.destory',$serieslist->id) }}">
      <input type="hidden" name="_method" value="DELETE"/>
  {{ csrf_field() }}
  </form>
  @endforeach

  <!--javascript bootstrap   -->
 <script src="{{asset('js/jquery.slim.min.js')}}"></script>
 <script src="{{asset('js/dashpopper.min.js')}}"></script>
 <script src="{{asset('js/dashbootstrap.min.js')}}"></script>
  </body>
</html>
