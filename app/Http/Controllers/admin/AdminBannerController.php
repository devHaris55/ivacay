<?php

namespace App\Http\Controllers\admin;

use App\Models\BannerModel;
use App\Models\Visitor;
use DB;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminBannerController extends Controller
{
    function dashboard()
    {
        $visitor = Visitor::select(
            DB::raw("year(created_at) as year"),
            DB::raw("SUM(click) as total_click"),
            DB::raw("SUM(viewer) as total_viewer")) 
        ->orderBy(DB::raw("YEAR(created_at)"))
        ->groupBy(DB::raw("YEAR(created_at)"))
        ->get();

        $result[] = ['Year','Click','Viewer'];
        foreach ($visitor as $key => $value) {
        $result[++$key] = [$value->year, (int)$value->total_click, (int)$value->total_viewer];
        }

        return view('admin.dashboard')
            ->with('visitor',json_encode($result));
        // return view('admin.dashboard');
    }

/**Banner functions starts*/
    function banner()
    {
        $banner = BannerModel::get();
        return view('admin.banners.banner-list',compact('banner'));
    }
    function banner_add()
    {
        return view('admin.banners.banner-add');
    }
    function banner_edit($id)
    {
        $banner = BannerModel::where('id',$id)->first();
        return view('admin.banners.banner-edit',compact('banner'));
    }
    function banner_delete(BannerModel $banner)
    {
        $banner->delete();
        return back()->with('delete','Deleted Successfully');
    }
    function banner_add_edit_data(Request $request,BannerModel $banner)
    {
        $create = 1;
        (isset($banner->id) and $banner->id>0)?$create=0:$create=1;
        if($request->hasFile('images'))
        {
            $imageName = time().'.'.$request->images->getClientOriginalExtension();
            $request->images->move(public_path('/uploads/banners'), $imageName);
            $banner->images = $imageName;
        }
        $banner->title = $request->title;
        $banner->description = $request->description;
        $banner->status = $request->status;
        $banner->save();
        if($create == 0)
        {
            return back()->with('update','Updated Successfully');
        }
        else
        {
            return back()->with('success','Added Successfully');
        }
    }
/**Banner functions ends*/


}
