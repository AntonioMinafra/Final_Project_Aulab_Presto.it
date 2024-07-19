<?php

namespace App\Livewire;

use App\Models\Image;
use Livewire\Component;
use App\Models\Announcement;

class IndexAnnouncements extends Component
{
    public $announcements;

    public function mount()
    {
        $this->announcements = Announcement::with('images')->orderBy('created_at', 'desc')->where('is_accepted', true)->take(4)->get();
    }

    public function render()
    {
        $announcements = Announcement::all();
        return view('livewire.index-announcements', compact('announcements'));
    }
}
