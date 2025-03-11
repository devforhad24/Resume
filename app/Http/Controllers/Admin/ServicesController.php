<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;

class ServicesController extends Controller
{

    public function allService(){
        $services = Service::all();

        return view('admin.service.all-service', compact('services'));
    }

    public function createService(){

        $service = Service::all();
        return view('admin.service.add-service', compact('service'));
    }

    public function storeService(Request $request){
        // return $request->all();
        $request->validate([
            'title' => 'required',
            'sub_title' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageName = '';
        if($image = $request->file('image')){
            $imageName = time().'.'.$image->extension();
            // $image->move(('public/backend/services'),$imageName);
            // Resize Image
            $new_image = Image::make($image);
            $new_image->resize(68,68)->save(('public/backend/services/' .$imageName));

        }

        Service::create([
            'title' => $request->title,
            'sub_title' => $request->sub_title,
            'image' => $imageName,
        ]);

        $notification = array(
            'message' => 'Service Added Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.service')->with($notification);

    }

    public function editService($id){
        $service = Service::find($id);

        return view('admin.service.edit-service', compact('service'));
    }

    public function updateService(Request $request, $id){
        $request->validate([
            'title' => 'required',
            'sub_title' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $service = Service::find($id);

        $imageName = $service->image;
        if($image = $request->file('image')){
            $imageName = time().'.'.$image->extension();
            // $image->move(('public/backend/services'),$imageName);
            // Resize Image
            $new_image = Image::make($image);
            $new_image->resize(68,68)->save(('public/backend/services/' .$imageName));
        }

        $service->update([
            'title' => $request->title,
            'sub_title' => $request->sub_title,
            'image' => $imageName,
        ]);

        $notification = array(
            'message' => 'Service Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.service')->with($notification);
    }

    public function deleteService($id){
        $service = Service::find($id);

        $deleteOldImage = 'public/backend/services/' .$service->image;
        if(file_exists($deleteOldImage)){
            File::delete($deleteOldImage);
        }

        $service->delete();

        $notification = array(
            'message' => 'Service Added Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.service')->with($notification);
    }

    public function changeStatus($id){
        $getStatus = Service::select('status')->where('id', $id)->first();
        if($getStatus->status == 1){
            $status = 0;
        }else{
            $status = 1;
        }

        Service::where('id', $id)->update(['status' => $status]);

        $notification = array(
            'message' => 'Status Changed',
            'alert-type' => 'warning'
        );
    
        return redirect()->back()->with($notification);
    }


}
