<?php

namespace App\Http\Controllers\admin;

use App\Models\JobModel;
use App\Models\JobAppliedModel;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminJobController extends Controller
{
    function dashboard()
    {
        return view('admin.dashboard');
    }

/**Job functions starts*/
    function job_applications()
    {
        $job_applications = JobAppliedModel::with('get_user', 'get_job')->get();
        return view('admin.jobs-applied.job-applied-list',compact('job_applications'));
    }
    function job()
    {
        $job = JobModel::get();
        return view('admin.jobs.job-list',compact('job'));
    }
    function job_add()
    {
        return view('admin.jobs.job-add');
    }
    function job_edit($id)
    {
        $job = JobModel::where('id',$id)->first();
        return view('admin.jobs.job-edit',compact('job'));
    }
    function job_delete(JobModel $job)
    {
        $job->delete();
        return back()->with('delete','Deleted Successfully');
    }
    function job_add_edit_data(Request $request,JobModel $job)
    {
        (isset($job->id) and $job->id>0) ? $validate_image = '' : $validate_image='required';

        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'start_date' => 'required|before:end_date',
            'end_date' => 'required|after:start_date',
            // 'image' => 'required',
            'images' => $validate_image,
            'images.*' => 'image|mimes:jpeg,png,jpg|max:2048'
        ]);

        $create = 1;
        (isset($job->id) and $job->id>0)?$create=0:$create=1;
        if($request->hasFile('images'))
        {
            $imageName = time().'.'.$request->images->getClientOriginalExtension();
            $request->images->move(public_path('/uploads/jobs'), $imageName);
            $job->images = $imageName;
        }
        $job->title = $request->title;
        $job->description = $request->description;
        $job->start_date = $request->start_date;
        $job->end_date = $request->end_date;
        $job->status = $request->status;
        $job->save();
        if($create == 0)
        {
            return back()->with('update','Updated Successfully');
        }
        else
        {
            return back()->with('success','Added Successfully');
        }
    }
/**Job functions ends*/


}
