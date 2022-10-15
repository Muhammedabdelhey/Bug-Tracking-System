<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Postimage extends Model
{
    use HasFactory;
    //Store image
    public static function storeImage(Request $request)
    {
        if ($request->file('image')) {
            $file = $request->file('image');
            $filename = time()  . $file->getClientOriginalName();
            $file->move(public_path('public/Image'), $filename);
            $data['image'] = $filename;
        }
 
        return $filename;
    }
}
