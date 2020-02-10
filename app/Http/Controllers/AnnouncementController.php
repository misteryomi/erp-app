<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Announcement;
use Auth;

class AnnouncementController extends Controller
{

    private $user;
    private $announcement;

    function __construct(Announcement $announcement) {

        $this->announcement = $announcement;

        $this->middleware(function($request, $next) {
            $this->user = Auth::user();

            return $next($request);
        });
    }

    public function index(Request $request) {
        $announcements = $this->announcement->latest()->paginate(15);

        if($request->has('unpublish')) {
            $this->unpublish($request->id);
        }

        if($request->has('publish')) {
            $this->publish($request->id);
        }

        if($request->has('delete')) {
            $this->delete($request->id);
        }

        return view('announcements.index', compact('announcements'));
    }

    public function apiAnnouncements() {
        $announcement = $this->announcement->whereDoesntHave('seen', function($query) {
                                return $query->where('user_id', $this->user->id);
                            })
                            ->where('active', 1)
                            ->whereDate('expiry', '>=', \Carbon\Carbon::now())
                            ->latest()->first();   
        
        return $announcement ? $announcement->toJson() : [];
    }

    // public function new() {
    //     $announcement = $this->announcement->whereNotIn('seen', function($query) {
    //                                 return $query->where('user_id', $this->user->id);
    //                             })
    //                             ->where('active', 1)
    //                             ->where('expiry', '<=', \Carbon\Carbon::now())
    //                             ->latest()->first();        
    //     return $announcement->toJson();
    // }

    public function store(Request $request) {
        $request->validate([
            'announcement' => 'required'
        ]);

        $requestData = $request->all();
        $requestData['expiry'] = \Carbon\Carbon::now();
        $requestData['user_id'] = $this->user->id;

        $this->announcement->create($requestData);

        return redirect(route('announcement.index'))->withMessage('Announcement published successfully!');
    }

    public function markAsSeen(Request $request, Announcement $announcement) {
        $announcement->seen()->create(['user_id' => $this->user->id]);

        return json_encode(true);
    }


    private function unpublish($id) {
        $announcement = $this->announcement->find($id);

        if(!$announcement) {
            return redirect()->back()->withError('Record not found');
        }

        $announcement->update(['active' => 0]);

        return redirect()->route('announcement.index')->withMessage('Announcement unpublished successfully!');
    }

    private function publish($id) {
        $announcement = $this->announcement->find($id);

        if(!$announcement) {
            return redirect()->back()->withError('Record not found');
        }
        $announcement->update(['active' => 1]);

        return redirect()->route('announcement.index')->withMessage('Announcement published successfully!');
    }

    private function delete($id) {
        $announcement = $this->announcement->find($id);

        if(!$announcement) {
            return redirect()->back()->withError('Record not found');
        }

        $announcement->delete();

        return redirect()->route('announcement.index')->withMessage('Announcement deleted successfully!');
    }

}
