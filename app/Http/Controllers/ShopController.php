<?php

namespace App\Http\Controllers;

use App\Integration\Database\Post;
use App\Productlist;
use App\Recommend;
use App\Serieslist;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index()
    {

        $serieslists = serieslist::all();
        $productlists = Productlist::all();

        return view('shops',compact('serieslists','productlists'));
    }

    public function index2()
    {
        $serieslists = serieslist::all();
        $recommends = Recommend::all();
        $productlists = Productlist::query()->orderBy('created_at', 'DESC')->get();

        return view('layouts.index',compact('serieslists','productlists','recommends'));

    }

    public function index3($id)
    {
        $serieslists = serieslist::all();
        $product = Productlist::find($id);

        return view('product',compact('serieslists','product'));

    }


    /**搜索模块**/
    public function search(Request $request)
    {
        $serieslists = serieslist::all();

        $builder = Productlist::query();
        if ($search = $request->input('search', '')) {
            $like = '%'.$search.'%';

            $builder->where(function ($query) use ($like) {
                $query->where('Model', 'like', $like)
                    ->orWhere('sname', 'like', $like);

            });
        }
        $productlists = $builder->get();

        return view('shops',compact('serieslists','productlists','search'));

    }


    /* 创建音箱系列 */
    public function seriesindex()
    {
        $serieslists = serieslist::withCount('sname')->get();

        return view('admin.index',compact('serieslists'));
    }

    public function seriesstore(Request $request)
    {

        $datas = $request->all();
        Serieslist::create($datas);

        return redirect('dashboard');
    }

    public function seriesupdate(Request $request,Serieslist $serieslist)
    {

      $serieslist->update($request->all());

       return redirect('dashboard');
    }

    public function seriesdestroy(Serieslist $serieslist)
    {

        $serieslist->delete();

        return redirect('dashboard');
    }


    /* 创建音箱产品 */
    public function createindex()
    {
        $productlists = Productlist::all();
        $serieslists = serieslist::all();

        return view('admin.create',compact('productlists','serieslists'));

    }

    public function createstore(Request $request,Productlist $productlist)
    {

        $img01 = $request->file('img01');
        $img02 = $request->file('img02');
        $img03 = $request->file('img03');

        $folder_name = "product/images/" . date("Ym/d", time());
        $upload_path = public_path() . '/' . $folder_name;

        $img01extension  =  strtolower($img01->getClientOriginalExtension())  ?:  'png';
        $img02extension  =  strtolower($img02->getClientOriginalExtension())  ?:  'png';
        $img03extension  =  strtolower($img03->getClientOriginalExtension())  ?:  'png';

        $file_prefix = $request->Model;
        $img01filename = $file_prefix . '_' . time() . '_' . str_random(10) . '.' . $img01extension;
        $img02filename = $file_prefix . '_' . time() . '_' . str_random(10) . '.' . $img02extension;
        $img03filename = $file_prefix . '_' . time() . '_' . str_random(10) . '.' . $img03extension;
        $img01->move($upload_path, $img01filename);
        $img02->move($upload_path, $img02filename);
        $img03->move($upload_path, $img03filename);


        $datas = $request->all();

        $productlist = new Productlist($datas);
        $productlist->img01 = $folder_name . '/' . $img01filename;
        $productlist->img02 = $folder_name . '/' . $img02filename;
        $productlist->img03 = $folder_name . '/' . $img03filename;

        $productlist->save();

        return redirect('/dashboard/create');
    }

    public function productlistdestroy(Productlist $productlist)
    {

        $productlist->delete();

        return redirect('/dashboard/create');
    }

    public function productlistupdate(Request $request,Productlist $productlist)
    {

        $productlist->update($request->all());

        return redirect('/dashboard/create');
    }


    /* 精选音箱产品 */
    public function recommendindex()
    {
        $productlists = Productlist::all();
        $serieslists = serieslist::all();
        $recommends = Recommend::all();

        return view('admin.recommend',compact('productlists','serieslists','recommends'));
    }

    public function recommendstore(Request $request)
    {

        $datas = $request->all();
        Recommend::create($datas);

        return redirect('/dashboard/recommend');
    }

    public function recommenddestroy(Recommend $recommend)
    {

        $recommend->delete();

        return redirect('/dashboard/recommend');
    }

    public function recommendupdate(Request $request,Recommend $recommend)
    {

        $recommend->update($request->all());

        return redirect('/dashboard/recommend');
    }
}
