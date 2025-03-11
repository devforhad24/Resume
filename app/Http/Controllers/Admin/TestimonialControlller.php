<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
Use App\Models\Testimonial;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\File;

class TestimonialControlller extends Controller
{
    public function allTestimonials(){
        $testimonials = Testimonial::all();
        
        return view('admin.testimonial.testimonials', compact('testimonials'));
    }

    public function addTestimonial(){

        return view('admin.testimonial.add-testimonial');
    }

    public function storeTestimonial(Request $request){
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageName = '';
        if($image = $request->file('image')){
            $imageName = time().'.'.$image->extension();
            // $image->move(('public/backend/services'),$imageName);
            // Resize Image
            $new_image = Image::make($image);
            $new_image->resize(130,130)->save(('public/backend/testimonials/' .$imageName));

        }

        Testimonial::create([
            'name' => $request->name,
            'description' => $request->description,
            'image' => $imageName,
        ]);

        $notification = array(
            'message' => 'Testimonial Added Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('testimonials')->with($notification);
    }

    public function editTestimonial($id){
        $testimonial = Testimonial::find($id);

        return view('admin.testimonial.edit-testimonial', compact('testimonial'));
    }

    public function updateTestimonial(Request $request, $id){
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $testimonial = Testimonial::find($id);

        $imageName = $testimonial->image;
        if($image = $request->file('image')){
            $imageName = time().'.'.$image->extension();
            // $image->move(('public/backend/services'),$imageName);
            // Resize Image
            $new_image = Image::make($image);
            $new_image->resize(130,130)->save(('public/backend/testimonials/' .$imageName));
        }

        $testimonial->update([
            'name' => $request->name,
            'description' => $request->description,
            'image' => $imageName,
        ]);

        $notification = array(
            'message' => 'Testimonial Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('testimonials')->with($notification);
    }

    public function deleteTestimonial($id){
        $testimonial = Testimonial::find($id);

        $deleteOldImage = 'public/backend/testimonials/' .$testimonial->image;
        if(file_exists($deleteOldImage)){
            File::delete($deleteOldImage);
        }

        $testimonial->delete();

        $notification = array(
            'message' => 'Tetimonial Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('testimonials')->with($notification);
    }

}
