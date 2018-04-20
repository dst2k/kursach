<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Photo;
use Validator;

class UploadController extends Controller
{
    public function upload(Request $request)
        {
            $user = \Auth::user();
        	$user_id = $user->id;
        	
        	$filename = null;
            $files = $request->file('image');

            if (count($files) > 10)
            {
            return redirect('home')->with('error','Слишком много файлов'); 
        	}
        	else 
            {
        		$validator = Validator::make($request->all(), [
                'image.*' => 'image|mimes:jpeg,png'
            ]);
        		if($validator->fails()){
          return back()->withInput()->withErrors($validator);
        }
        else
        {
            
            foreach ($files as $file) {
            $photo = new Photo;

            if($file)
            {
                $filename = $file->store('public/kursach');
                $filename = substr($filename, strripos($filename, '/')+1);
                
            }
            
            $photo->image = $filename;
            $photo->user_id = $user_id;
            $photo->save();
         	}
            return redirect('layouts')->with('success', 'Фото успешно загружены');
         }
     }
exit;
}

}
