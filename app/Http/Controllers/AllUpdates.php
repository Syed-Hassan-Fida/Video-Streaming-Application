<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\HomeVideo;
use App\Models\HomeVideoInfo;
use App\Models\SingleVideo;
use App\Models\SingleVideoInfo;
use App\Models\ArchiveVideoInfo;

class AllUpdates extends Controller
{
    private const folder_path4 = 'about_video';

    public static function path($path){
        return pathinfo($path, PATHINFO_FILENAME);
    }
    
    //About upodates
    public function aboutEditView(Request $request){
        $data['contacts'] = [];
        $data['expertise'] = [];
        $data['contacts'] = Contact::find($request->id);
        if($data['contacts']){
            $data['expertise'] = json_decode($data['contacts']->expertise);
        }
        return view("allUpdates.about_update", $data);
    }

    public function aboutEdit(Request $request){
        $arr = json_encode($request->expertise);
        Contact::where("id", $request->about_id)->update([
            'title' => $request->title,
            'line' => $request->line,
            'description' => $request->desc,
            'expertise' => $arr
        ]);

        return redirect()->back();
        
    }

    public function updateAboutVideo(Request $request){
        // return $request;
        // if($request->about_video){
        //     $destinationPath1 = 'about_videos';
        //     $myimage1 = time().'.'.$request->about_video->extension();
        //     $request->about_video->move(public_path($destinationPath1), $myimage1);
        // }else{
        //     $myimage1 = null;
        // }
        
        if($request->file("about_video")){
            $image = $request->file("about_video");
            $newFilename = str_replace(' ', '_', $image->getClientOriginalName());
            $public_id2 = date('Y-m-d_His').'_'.$newFilename;
            $myimage1 = cloudinary()->uploadVideo($image->getRealPath(), [
                "public_id" => self::path($public_id2),
                "folder"    => self::folder_path4,
                "resource_type" => "video", 
                "quality" => "auto"
            ])->getSecurePath();
        }else {
            $myimage1 = null;
        }
        Contact::where("id", $request->about_id)->update([
            'about_video' => $myimage1,
            
        ]);
        return redirect()->back();
        
    }

    // home video updates
    public function homeVideoEditView(Request $request){
        $data["homeVideos"] = [];
        $data["HomeVideoInfo"] = [];
        $data["home_video_id"] = [];
        $data["home_video_id"] = $request->id;
        $data["homeVideos"] = HomeVideo::find($request->id);
        $data["HomeVideoInfo"] = HomeVideoInfo::where("home_id", $request->id)->get();
        return view("allUpdates.homeVideoUpdate", $data);
    }

    public function homeVideoEdit(Request $request){

        // if($request->gif){
        //     $destinationPath1 = 'gifs';
        //     $myimage1 = time().'.'.$request->gif->extension();
        //     $request->gif->move(public_path($destinationPath1), $myimage1);
        // }else{
        //     $myimage1 = null;
        // }
        
        // if($request->video){
        //     $destinationPath2 = 'videos';
        //     $myimage2 = time().'.'.$request->video->extension();
        //     $request->video->move(public_path($destinationPath2), $myimage2);
        // }else{
        //     $myimage2 = null;
        // }

        HomeVideo::where("id", $request->home_id)->update([
            'title' => $request->title,
            // 'gif' => $myimage1,
            // 'video' => $myimage2,
        ]);

        return redirect()->back();
    }

    public function homeInfoEdit(Request $request){
        // return $request;
        $arr1 = $request->col1;
        $arr2 = $request->col2;
        $ids = $request->home_info_id;
        $size = sizeof($request->col1);
        $check = HomeVideoInfo::where("home_id",$request->home_video_id)->get();
        // return $check;
        if(sizeof($check) == 0){
            if($request->col1[0] != null){
                for($i=0; $i<$size; $i++){
                    HomeVideoInfo::insert([
                        'home_id' => $request->home_video_id,
                        'col1' => $arr1[$i] ,
                        'col2' => $arr2[$i],
                    ]);
                }
            }
        } else if (sizeof($check) > 0) {
            if($request->col1[0] != null){
                for($i=0; $i<$size; $i++){
                    HomeVideoInfo::where("id", $ids[$i])->update([
                        'home_id' => $request->home_video_id,
                        'col1' => $arr1[$i] ,
                        'col2' => $arr2[$i],
                    ]);
                }
            }
        }
        
        return redirect()->back();
    }

    // single home video update 
    public function homeSingleVideoEditView(Request $request){
        $data["homeVideos"] = [];
        $data["HomeVideoInfo"] = [];
        $data["home_video_id"] = [];
        $data["home_video_id"] = $request->id;
        $data["homeVideos"] = SingleVideo::find($request->id);
        $data["HomeVideoInfo"] = SingleVideoInfo::where("home_id", $request->id)->get();
        // return  $data["home_video_id"] ;
        return view("allUpdates.singleVideoUpdate", $data);
    }

    public function homeSingleVideoEdit(Request $request){

        // if($request->gif){
        //     $destinationPath1 = 'gifs';
        //     $myimage1 = $request->gif->getClientOriginalName();
        //     $request->gif->move(public_path($destinationPath1), $myimage1);
        // }else{
        //     $myimage1 = null;
        // }
        
        // if($request->video){
        //     $destinationPath2 = 'videos';
        //     $myimage2 = $request->video->getClientOriginalName();
        //     $request->video->move(public_path($destinationPath2), $myimage2);
        // }else{
        //     $myimage2 = null;
        // }

        SingleVideo::where("id", $request->home_id)->update([
            'title' => $request->title,
            // 'gif' => $myimage1,
            // 'video' => $myimage2,
        ]);

        return redirect()->back();
    }

    public function homeSingleInfoEdit(Request $request){
        // return $request;
        $arr1 = $request->col1;
        $arr2 = $request->col2;
        $ids = $request->home_info_id;
        $size = sizeof($request->col1);
        $check = SingleVideoInfo::where("home_id",$request->home_video_id)->get();
        // return $check;
        if(sizeof($check) == 0){
            if($request->col1[0] != null){
                for($i=0; $i<$size; $i++){
                    SingleVideoInfo::insert([
                        'home_id' => $request->home_video_id,
                        'col1' => $arr1[$i] ,
                        'col2' => $arr2[$i],
                    ]);
                }
            }
        } else if (sizeof($check) > 0) {
            if($request->col1[0] != null){
                for($i=0; $i<$size; $i++){
                    SingleVideoInfo::where("id", $ids[$i])->update([
                        'home_id' => $request->home_video_id,
                        'col1' => $arr1[$i] ,
                        'col2' => $arr2[$i],
                    ]);
                }
            }
        }
        
        return redirect()->back();
    }

    public function archieveSingleInfoEdit(Request $request){
        // return $request;
        $arr1 = $request->col1;
        $arr2 = $request->col2;
        $ids = $request->arch_info_id;
        $size = sizeof($request->col1);
        $check = ArchiveVideoInfo::where("arch_id",$request->arch_video_id)->get();
        // return sizeof($check);
        if(sizeof($check) == 0){
            if($request->col1[0] != null){
                for($i=0; $i<$size; $i++){
                    ArchiveVideoInfo::insert([
                        'arch_id' => $request->arch_video_id,
                        'col1' => $arr1[$i] ,
                        'col2' => $arr2[$i],
                    ]);
                }
            }
        } else if(sizeof($check) > 0){
            if($request->col1[0] != null){
                for($i=0; $i<$size; $i++){
                    ArchiveVideoInfo::where("id", $ids[$i])->update([
                        'arch_id' => $request->arch_video_id,
                        'col1' => $arr1[$i] ,
                        'col2' => $arr2[$i],
                    ]);
                }
            }
        }
        
        return redirect()->back();
    }

}
