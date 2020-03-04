<?php

namespace App\Http\Controllers\Gallery;

use App\Gallery;
use App\GalleryComment;
use App\GalleryFolder;
use App\Http\Resources\GalleryCommentsResource;
use App\Http\Resources\GalleryResource;
use App\Http\Resources\GalleryFolderResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class GalleryCommentsController extends Controller
{
    private $user;
    private $picture;
    private $comment;

    function __construct(Gallery $picture, GalleryComment $comment) {
        $this->picture = $picture;
        $this->comment = $comment;


        $this->middleware(function($request, $next) {
            $this->user = Auth::user();

            return $next($request);
        });
    }

    public function index(Gallery $picture) {
        $comments = $picture->comments()->latest()->get();
        return GalleryCommentsResource::collection($comments)->toJson();
    }

    public function store(Request $request, Gallery $picture) {

        $request->validate([
            'comment' => 'required'
        ]);

        $requestData = $request->all();
        $requestData['user_id'] = $this->user->id;

        $comment = $picture->comments()->create($requestData);

        return response(['status' => true, 'message' => 'Comment added successfully!', 'comment' => new GalleryCommentsResource($comment)]);
    }

}
