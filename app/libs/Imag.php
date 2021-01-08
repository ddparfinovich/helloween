<?php
namespace App\libs;
use Image;
use Auth;

class Imag {
    public function url($path = null, $directory = null, $name = null){
        if ($path != null){
            if($directory != null){
                $dir = public_path().$directory;
            }
            else{
                if(!Auth::guest()){
                    $dir = public_path().'/uploads/'.Auth::user()->id.'/';
                }
                else{
                    $dir = public_path().'/uploads/0/';
                }
                if(!file_exists($dir)){
                    mkdir($dir, 0777, true);
                }
            }
            if($name != null){
                $filename = $name;
            }
            else{
                $filename = date('y_m_d_h_i_s_').'.jpg';
            }
            $image = Image::make($path);
            $image->save($dir.$filename);
            $image->resize(300, null, function ($constraint) {
                $constraint->aspectRatio();
            });
            $image->save($dir.'s_'.$filename);
            $image->resize(100, null, function ($constraint) {
                $constraint->aspectRatio();
            });
            $image->save($dir.'ss_'.$filename);
            return $filename;
        }

        else{
            return false;
        }
    }
}