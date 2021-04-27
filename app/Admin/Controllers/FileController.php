<?php

namespace App\Admin\Controllers;

use App\Http\Controllers\Controller;
use Carbon\Carbon;

class FileController extends Controller
{

    public function index($type,$file=null,$ajax=true,$file_name="")
    {
        $file = $file ? $file : $_FILES['img'];

        if($file['error']!=0){
            $data = array('status'=>false,'msg'=>trans('admin::lang.Upload_error'));
            return $ajax ? json_encode($data) : $data;
        }


        //Get the file name
        $name = $file['name'];
        $img_type = strtolower(substr($name,strrpos($name,'.')+1)); //Gets the file type and converts it to lowercase
        $allow_type = array('jpg','jpeg','gif','png'); //Define the type of upload allowed
//Determine if file type is allowed to upload
        if(!in_array($img_type, $allow_type)){
            $data = array('status'=>false,'msg'=>trans('admin::lang.imgtype_error').$img_type);
            return $ajax ? json_encode($data) : $data;
        }
//Determine if uploaded via HTTP POST
        if(!is_uploaded_file($file['tmp_name'])){
            $data = array('status'=>false,'msg'=>trans('admin::lang.post_img'));
            return $ajax ? json_encode($data) : $data;
        }
        $file_name = $file_name ? $file_name.'.'.$img_type : md5(uniqid()).Carbon::now()->timestamp.'.'.$img_type;

        if($type=='attr_img'){
            $upload_path = public_path().'/upload/goods/attr_img/'; //Storage path of uploaded files
            $path = "goods/attr_img/";
        }elseif($type=='goods'){
            $upload_path = public_path().'/upload/goods/'; //Storage path of uploaded files
            $path = "goods/";
        }else{
            $upload_path = public_path().'/upload/'.$type.'/'; //Storage path of uploaded files
            $path = $type."/";
        }
        if(!is_dir($upload_path)){
            @mkdir($upload_path);
        }
//Start moving files to the appropriate folder
        if(move_uploaded_file($file['tmp_name'],$upload_path.$file_name)){
            $data['status'] = true;
            $data['path'] = $path.$file_name;
            $data['view_path'] = config('admin.upload.host').$path.$file_name;
        }else{
            $data = array('status'=>false,'msg'=>trans('admin::lang.moveimg_error'));
            return $ajax ? json_encode($data) : $data;
        }
        if($ajax){
            return json_encode($data);
        }else{
            return $data;
        }
    }

    public function multipleImg($type,$files,$ajax=true){
        $imgs = array('status'=>true);
        for($i=0;$i<count($files['name']);$i++){
            $file['name'] = $files['name'][$i];
            $file['type'] = $files['type'][$i];
            $file['tmp_name'] = $files['tmp_name'][$i];
            $file['error'] = $files['error'][$i];
            $file['size'] = $files['size'][$i];
            $data = $this->index($type,$file,false);
            if($data['status']){
                $imgs['path'][$i] = $data['path'];
                $imgs['view_path'][$i] = $data['view_path'];
            }else{

                return $ajax ? json_encode(array('status'=>false,'msg'=>$data['msg'])) : array('status'=>false,'msg'=>$data['msg']);
            }
        }
        return $ajax ? json_encode($imgs) : $imgs;
    }
}
