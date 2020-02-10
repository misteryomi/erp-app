<?php

namespace App\Http\Controllers;

use App\Gallery;
use App\GalleryFolder;
use App\Http\Resources\GalleryResource;
use App\Http\Resources\GalleryFolderResource;
use Illuminate\Http\Request;


class GalleryController extends Controller
{
    private $user;
    private $picture;
    private $folder;

    function __construct(Gallery $picture, GalleryFolder $folder) {
        $this->picture = $picture;
        $this->folder = $folder;

        // $this->middleware()
    }

    public function index() {
        // $pictures = json_encode(GalleryResource::collection($this->picture->all()), JSON_UNESCAPED_SLASHES);
        return view('gallery.index');
    }

    public function list() {
        $folders = $this->folder->all();


        return GalleryFolderResource::collection($folders)->toJson();
    }

    public function show(GalleryFolder $folder) {

        return view('gallery.show', compact('folder'));
    }


    public function folderPictures(GalleryFolder $folder) {
        $pictures = $folder->pictures()->get();

        return GalleryResource::collection($pictures)->toJson();
    }

    public function storeFolder(Request $request) {

        $request->validate([
            'name' => 'required|unique:gallery_folders'
        ]);

        $folder = $this->folder->create($request->except('_token'));

        return redirect()->route('gallery.show', ['folder' => $folder->id])->withMessage('Folder created successfully! You can now begin to add pictures');
    }

    public function storePictures(Request $request, GalleryFolder $folder) {

        $request->validate([
            'pictures.*' => 'image'
        ]);

        foreach($request->pictures as $picture) {
            $path = $picture->store('public/gallery/'. \Str::slug($folder->name, '-'));

            $this->picture->create([
                'url' => $path,
                'caption' => $request->caption,
                'folder_id' => $folder->id,
            ]);

        }
        // $this->picture->create($request->except('_token'));

        return redirect()->route('gallery.show', ['folder' => $folder->id]);
    }

}
