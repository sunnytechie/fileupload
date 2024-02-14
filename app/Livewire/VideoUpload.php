<?php

namespace App\Livewire;

use Livewire\Component;

class VideoUpload extends Component
{
    public function render()
    {
        return view('livewire.video-upload');
    }

    public function save()
    {
        $this->validate([
            'video' => 'required|mimes:mp4|max:102400',
        ]);

        dd($this->video); // (object) Illuminate\Http\UploadedFile {#1234}
        $this->video->store('videos');
    }
}
