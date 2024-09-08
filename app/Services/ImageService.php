<?php 

namespace App\Services;

class ImageService {
    public function companiesImage($request){
       
        $image = $request->image;
        
        $newImageName = time()."-".$image->getClientOriginalName();
        $image->storeAs('companies' , $newImageName , 'public');
        return $newImageName;
    }

    public function membersImage($request){
       
        $image = $request->image;
        
        $newImageName = time()."-".$image->getClientOriginalName();
        $image->storeAs('members' , $newImageName , 'public');
        return $newImageName;
    }

    public function testimonialsImage($request){
       
        $image = $request->image;
        
        $newImageName = time()."-".$image->getClientOriginalName();
        $image->storeAs('testimonials' , $newImageName , 'public');
        return $newImageName;
    }
}


