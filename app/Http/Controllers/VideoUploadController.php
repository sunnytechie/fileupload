<?php

namespace App\Http\Controllers;

use Faker\Core\File;
use App\Models\Fileupload;
use App\Mail\FileUploadMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class VideoUploadController extends Controller
{
    public function index()
    {
        return view('video-upload');
    }

    public function store(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:mp4,webm,mkv,avi,flv,3gp,mov,wmv,ts|max:2004800',
        ]);

        // Get the original file extension
        $extension = request()->file->getClientOriginalExtension();

        // Generate a unique name using hash and preserve the extension
        $name = hash('sha256', time()) . '.' . $extension;

        // Store file into the 'uploads' folder
        request()->file->move(public_path('uploads'), $name);

       $file = new Fileupload();
       $file->name = "uploads/$name";
       $file->save();

       //send email
        $file_path = "uploads/$name";
        $recipient = "sunnyict001@gmail.com";

        Mail::to($recipient)->send(new FileUploadMail($file_path));

        return response()->json([
            'name' => $name,
            'success'=>'Successfully uploaded.']);
    }
}
