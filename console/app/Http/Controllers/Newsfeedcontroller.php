<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;


use App\Models\Newscategory;
use App\Models\Newsfeed;
use App\Models\Newsfeedgallery;


class Newsfeedcontroller extends Controller
{

  ### Create Newsfeed ###

  function create_newsfeed(){
    $role_type = session('user_session')->admin_role_type;
    if($role_type=='1'){
        $data=Newscategory::Where(['status'=>'Active'])->get();
        return view('admin.newsfeed.create_news_feed')->with('res',$data);
      }else{
        return redirect('/admin/login');
      }
  }

  function list_stories(){
    $role_type = session('user_session')->admin_role_type;
    if($role_type=='1'){
      $data=Newsfeed::orderBy('id', 'desc')->paginate(10);
      return view('admin.newsfeed.list_stories')->with('res',$data);
    }else{
      return redirect('/admin/login');

    }
  }


  function save_newsfeed(Request $request){

    $role_type = session('user_session')->admin_role_type;
    if($role_type=='1'){
      $validate_data=$request->validate([
        'title_ta'=>'required|unique:news_feed|max:80',
        'title_en'=>'required|unique:news_feed|max:80',
        'description_en'=>'required',
        'description_ta'=>'required',
      'nf_video_token_id'=>'nullable',
      'nf_cover_image'=>'required|image|mimes:jpeg,png,jpg|max:2048',
      'nf_category_id'=>'required',
      'news_date'=>'required',
    ],[
      'title_ta.required'=>'Title tamil is required',
      'title_en.required'=>'Title english is required',
      'description_en.required'=>'Description english is required',
      'description_ta.required'=>'Description tamil is required',
      'nf_video_token_id.required'=>'Video token  is required',
      'nf_cover_image.required'=>'Cover image is required',
      'status.required'=>'Status  is required',
      'nf_category_id.required'=>'Category is required',
      'title_ta.unique'=>'Title tamil is already exists!',
      'title_en.unique'=>'Title english is already exists!',
    ]);


    $image = $request->file('nf_cover_image');
    $nfimage = time().'.'.$image->getClientOriginalExtension();
    $destinationPath = storage_path('newsfeed/');
    $image->move($destinationPath, $nfimage);

    if(empty($request->input('nf_video_token_id'))){
      $video_token="";
    }else{
      $video_token=$request->input('nf_video_token_id');
    }
    $newDate = date("Y-m-d", strtotime($request->input('news_date')));
    if($request->input('nf_category_id')=='1'){
      date_default_timezone_set("Asia/Kolkata");
      $expiry_at = date('Y-m-d H:i:s', strtotime("+1 day"));
    }else{
      $expiry_at='';
    }



    // $data = Newsfeed::create([
    //   'title_ta' =>$request->title_ta,
    //   'title_en'=>$request->title_en,
    //   'description_en' =>$request->description_en,
    //   'description_ta'=>$request->description_ta,
    //   "nf_profile_type"=>$request->nf_profile_type,
    //   "nf_video_token_id"=>$video_token,
    //   "nf_category_id"=>$request->nf_category_id,
    //   "nf_cover_image"=>$imageName,
    //   "status"=>$request->status,
    //   "created_at"=>NOW(),
    //   "created_by"=>session('user_session')->id,
    // ]);

    $data=DB::table('news_feed')->insert(
          [
            'title_ta' =>$request->input('title_ta'),
            'title_en'=>$request->input('title_en'),
            'description_en' =>$request->input('description_en'),
            'description_ta'=>$request->input('description_ta'),
            'news_date'=>$newDate,
            "nf_profile_type"=>$request->input('nf_profile_type'),
            "nf_video_token_id"=>$video_token,
            "nf_category_id"=>$request->input('nf_category_id'),
            "nf_cover_image"=>$nfimage,
            "status"=>$request->input('status'),
            'expiry_at'=>$expiry_at,
            "created_at"=>NOW(),
            "created_by"=>session('user_session')->id,
      ]);

    if($data){
      return redirect('/admin/list_stories')->with(array('status'=>'success','msg'=>"Newsfeed created Successfully!."));
    }else{
      return redirect()->back()->with(array('status'=>'danger','msg'=>"Something went wrong!."));
    }
    }else{
      return redirect('/admin/login');
    }
  }


  function get_edit_newsfeed($nf_id){
    $role_type = session('user_session')->admin_role_type;
    if($role_type=='1'){
        $id = Crypt::decrypt($nf_id);
        $data=Newsfeed::find($id);
        $res=Newscategory::Where(['status'=>'Active'])->get();
        return view('admin.newsfeed.edit_newsfeed',compact('res','data'));
      }else{
        return redirect('/admin/login');
      }
  }


  function update_newsfeed(Request $request){

        $role_type = session('user_session')->admin_role_type;
        if($role_type=='1'){
          $nf_id=$request->input('nf_id');
          $validate_data=$request->validate([
          'title_ta'=>'required|max:80|unique:news_feed,title_ta,'.$nf_id,
          'title_en'=>'required|max:80|unique:news_feed,title_en,'.$nf_id,
          'description_en'=>'required',
          'description_ta'=>'required',
          'nf_profile_type'=>'required|in:v,i',
          'nf_video_token_id'=>'required_if:nf_profile_type,==,v',
          'nf_cover_image'=>'image|mimes:jpeg,png,jpg|max:2048',
          'nf_category_id'=>'required',
          'news_date'=>'required',
        ],[
          'title_ta.required'=>'Title tamil is required',
          'nf_video_token_id.required_if'=>'Video token id is required',
          'title_en.required'=>'Title english is required',
          'description_en.required'=>'Description english is required',
          'description_ta.required'=>'Description tamil is required',
          'nf_video_token_id.required'=>'Video token  is required',
          'nf_cover_image.required'=>'Cover image is required',
          'status.required'=>'Status  is required',
          'nf_category_id.required'=>'Category is required',
          'title_ta.unique'=>'Title tamil is already exists!',
          'title_en.unique'=>'Title english is already exists!',
        ]);


        $image = $request->file('nf_cover_image');
        $nf_old_img=$request->input('old_nf_cover_image');
        if(empty($image)){
          $img=$nf_old_img;
        }else{
        $nfimage = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = storage_path('newsfeed/');
        $image->move($destinationPath, $nfimage);
        $img=$nfimage;
        }

        if(empty($request->input('nf_video_token_id'))){
          $video_token="";
        }else{
          $video_token=$request->input('nf_video_token_id');
        }
        $newDate = date("Y-m-d", strtotime($request->input('news_date')));
        if($request->input('nf_category_id')=='1'){
          date_default_timezone_set("Asia/Kolkata");
          $expiry_at = date('Y-m-d H:i:s', strtotime("+1 day"));
        }else{
          $expiry_at='';
        }
        $data=DB::table('news_feed')->where('id',$nf_id)->update(
              [
                'title_ta' =>$request->input('title_ta'),
                'title_en'=>$request->input('title_en'),
                'description_en' =>$request->input('description_en'),
                'description_ta'=>$request->input('description_ta'),
                'news_date'=>$newDate,
                "nf_profile_type"=>$request->input('nf_profile_type'),
                "nf_video_token_id"=>$video_token,
                "nf_category_id"=>$request->input('nf_category_id'),
                "nf_cover_image"=>$img,
                "status"=>$request->input('status'),
                'expiry_at'=>$expiry_at,
                "created_at"=>NOW(),
                "created_by"=>session('user_session')->id,
          ]);

        if($data){
          return redirect('/admin/list_stories')->with(array('status'=>'success','msg'=>"Newsfeed updated Successfully!."));
        }else{
          return redirect()->back()->with(array('status'=>'danger','msg'=>"Something went wrong!."));
        }
        }else{
          return redirect('/admin/login');
        }
  }



  function add_gallery_newfeed($nf_id){
    $role_type = session('user_session')->admin_role_type;
    if($role_type=='1'){
        $id = Crypt::decrypt($nf_id);
        return view('admin.newsfeed.gallery',compact('id'));
      }else{
        return redirect('/admin/login');
      }
  }


  function save_gallery_image(Request $request){
    $role_type = session('user_session')->admin_role_type;
    if($role_type=='1'){
      $this->validate($request, [
              'filenames' => 'required',
              'filenames.*' =>'image|mimes:jpeg,png,jpg|max:2048',
      ]);
      $nf_id=$request->input('nf_id');
      $input=$request->all();
        $images=array();
        if($files=$request->file('filenames')){
            // $files = $request->file('filenames');
        foreach($files as $file){
            $name=time().'_'.$file->getClientOriginalName();
            $nfimage[]=$name;
            $destinationPath = storage_path('gallery/');
            $file->move($destinationPath,$name);
          }
          Newsfeedgallery::create([
              'nf_id' =>$nf_id,
              'nf_image' => $name
          ]);
        }
      // return back()->with('success', 'Gallery Uploaded successfully!.');
        return back()->with(array('status'=>'success','msg'=>"Gallery Uploaded successfully!."));
      }else{
        return redirect('/admin/login');
      }
  }


}