@extends('layouts.app')

@section('wide_content')
<div class="header bg-default pt-5 pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="pt-2 mb-3 text-light">
                <h1 class="text-light">Gallery</h1>
                @role('super-admin')
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-form">Create a new Folder</button>
                @endrole
            </div>
        </div>
    </div>
</div>
@endsection
@section('content')

    <div id="irs_gallery_folders"></div>


<div class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
  <div class="modal-dialog modal- modal-dialog-centered modal-sm" role="document">
      <div class="modal-content">
          <div class="modal-body p-0">
            <div class="card bg-secondary border-0 mb-0">
                <div class="card-header">
                    <h4>Create a New Folder</h4>
                </div>
                <div class="card-body px-lg-3">
                    <form role="form" action="{{ route('gallery.folder.post.new') }}" method="POST">
                        @csrf
                        <div class="form-group mb-3">
                            <div class="input-group input-group-merge input-group-alternative">
                                <input class="form-control" name="name" required placeholder="Folder Name" type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group input-group-merge input-group-alternative">
                                <textarea class="form-control" name="description" placeholder="Description"></textarea>
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-default btn-block">Create Folder</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

{{-- @section('styles')
<link rel="stylesheet" href="{{ asset('assets/vendor/nano-gallery/css/nanogallery.min.css') }}" type="text/css">
@endsection
@section('scripts')
<script src="{{ asset('assets/vendor/nano-gallery/jquery.nanogallery.min.js') }}"></script>
<script>
			var contentGalleryMLN= {!! $pictures !!}

			var contentGalleryMLN=[
				{
					src: 'storage/images/image_01.jpg',		// image url
					srct: 'storage/images/image_01ts.jpg',	// thumbnail url
					title: 'image 01', 						        // thumbnail title
					ID:2
				},
				{ src: 'storage/images/image_02.jpg', srct: 'storage/images/image_02ts.jpg', title: 'image 02',
					ID:3 },
				{ src: 'storage/images/image_03.jpg', srct: 'storage/images/image_03ts.jpg', title: 'album 1',
					ID:113,	kind:'album' },
				{	src: 'storage/images/image_03.jpg', srct: 'storage/images/image_03ts.jpg', title: 'album 2',
					ID:104,	kind:'album' },
				{	src: 'storage/images/image_03.jpg', srct: 'storage/images/image_03ts.jpg', title: 'album 3',
					ID:105, albumID:103,	kind:'album' },
				{ src: 'storage/images/image_02.jpg', srct: 'storage/images/image_02ts.jpg', title: 'image 03',
          ID:4 },
				{ src: 'storage/images/image_02.jpg', srct: 'storage/images/image_02ts.jpg', title: 'image 04',
          ID:5 },
				{ src: 'storage/images/image_02.jpg', srct: 'storage/images/image_02ts.jpg', title: 'image 05',
          ID:6 },
				{ src: 'storage/images/image_02.jpg', srct: 'storage/images/image_02ts.jpg', title: 'image 06',
          ID:7 },
				{ src: 'storage/images/image_02.jpg', srct: 'storage/images/image_02ts.jpg', title: 'image 07',
          ID:8 },
				{ src: 'storage/images/image_02.jpg', srct: 'storage/images/image_02ts.jpg', title: 'image 08',
          ID:9 },
				{ src: 'storage/images/image_02.jpg', srct: 'storage/images/image_02ts.jpg', title: 'image 09',
          ID:10 },
				{ src: 'storage/images/image_02.jpg', srct: 'storage/images/image_02ts.jpg', title: 'image 10',
          ID:11 },
				{ src: 'storage/images/image_02.jpg', srct: 'storage/images/image_02ts.jpg', title: 'image 10',
          ID:12 },
				{ src: 'storage/images/image_02.jpg', srct: 'storage/images/image_02ts.jpg', title: 'image 11',
          ID:13 },
				{ src: 'storage/images/image_02.jpg', srct: 'storage/images/image_02ts.jpg', title: 'image 12',
          ID:14 },
				{ src: 'storage/images/image_02.jpg', srct: 'storage/images/image_02ts.jpg', title: 'image 13',
          ID:15 },
				{ src: 'storage/images/image_02.jpg', srct: 'storage/images/image_02ts.jpg', title: 'image 14',
          ID:16 },
				{ src: 'storage/images/image_02.jpg', srct: 'storage/images/image_02ts.jpg', title: 'image 15',
          ID:17 },
				{ src: 'storage/images/image_02.jpg', srct: 'storage/images/image_02ts.jpg', title: 'image 16',
          ID:18 },
				{ src: 'storage/images/image_02.jpg', srct: 'storage/images/image_02ts.jpg', title: 'image 17',
          ID:19 },
				{ src: 'storage/images/image_02.jpg', srct: 'storage/images/image_02ts.jpg', title: 'image 18',
          ID:20 },
				{ src: 'storage/images/image_02.jpg', srct: 'storage/images/image_02ts.jpg', title: 'image 19',
          ID:21 },
				{ src: 'storage/images/image_02.jpg', srct: 'storage/images/image_02ts.jpg', title: 'image 20',
          ID:22 },
				{ src: 'storage/images/image_03.jpg', srct: 'storage/images/image_03ts.jpg', title: 'image 1a',
					ID:23, albumID:103	},
				{	src: 'storage/images/image_03.jpg', srct: 'storage/images/image_03ts.jpg', title: 'image 1b',
					ID:24, albumID:103	},
				{	src: 'storage/images/image_03.jpg', srct: 'storage/images/image_03ts.jpg', title: 'image 1c',
					ID:25, albumID:103	},
				{	src: 'storage/images/image_03.jpg', srct: 'storage/images/image_03ts.jpg', title: 'image 1d',
					ID:26, albumID:103	},
				{	src: 'storage/images/image_03.jpg', srct: 'storage/images/image_03ts.jpg', title: 'image 1e',
					ID:27, albumID:103 },
				{	src: 'storage/images/image_03.jpg', srct: 'storage/images/image_03ts.jpg', title: 'image 1f',
					ID:28, albumID:103	},
				{	src: 'storage/images/image_03.jpg', srct: 'storage/images/image_03ts.jpg', title: 'image 2a',
					ID:29, albumID:104	},
				{	src: 'storage/images/image_03.jpg', srct: 'storage/images/image_03ts.jpg', title: 'image 2b',
					ID:30, albumID:104	},
				{	src: 'storage/images/image_03.jpg', srct: 'storage/images/image_03ts.jpg', title: 'image 2c',
					ID:31, albumID:104	},
				{	src: 'storage/images/image_03.jpg', srct: 'storage/images/image_03ts.jpg', title: 'image 2d',
					ID:32, albumID:104	},
				{	src: 'storage/images/image_03.jpg', srct: 'storage/images/image_03ts.jpg', title: 'image 2e',
					ID:33, albumID:104	},
				{	src: 'storage/images/image_03.jpg', srct: 'storage/images/image_03ts.jpg', title: 'image 2f',
					ID:34, albumID:104	},
				{	src: 'storage/images/image_03.jpg', srct: 'storage/images/image_03ts.jpg', title: 'image 2g',
					ID:35, albumID:104	},
				{	src: 'storage/images/image_03.jpg', srct: 'storage/images/image_03ts.jpg', title: 'image 2h',
					ID:36, albumID:104	},
				{	src: 'storage/images/image_03.jpg', srct: 'storage/images/image_03ts.jpg', title: 'image 2i',
					ID:37, albumID:104	},
				{	src: 'storage/images/image_03.jpg', srct: 'storage/images/image_03ts.jpg', title: 'image 2j',
					ID:38, albumID:104	},
				{	src: 'storage/images/image_03.jpg', srct: 'storage/images/image_03ts.jpg', title: 'image 2k',
					ID:39, albumID:104	},
				{	src: 'storage/images/image_03.jpg', srct: 'storage/images/image_03ts.jpg', title: 'image 2l',
					ID:40, albumID:104	},
				{	src: 'storage/images/image_03.jpg', srct: 'storage/images/image_03ts.jpg', title: 'image 2m',
					ID:41, albumID:104	},
				{	src: 'storage/images/image_03.jpg', srct: 'storage/images/image_03ts.jpg', title: 'image 2n',
					ID:42, albumID:104	},
				{	src: 'storage/images/image_03.jpg', srct: 'storage/images/image_03ts.jpg', title: 'image 2o',
					ID:43, albumID:104	},
				{	src: 'storage/images/image_03.jpg', srct: 'storage/images/image_03ts.jpg', title: 'image 2n',
					ID:44, albumID:105	},
				{	src: 'storage/images/image_03.jpg', srct: 'storage/images/image_03ts.jpg', title: 'image 2n',
					ID:45, albumID:105	},
				{	src: 'storage/images/image_03.jpg', srct: 'storage/images/image_03ts.jpg', title: 'image 2o',
					ID:46, albumID:105	}
        ];


        console.log(contentGalleryMLN);


			jQuery("#nanoGallery4").nanoGallery({
                // kind:'json',
                thumbnailWidth:'auto',
                thumbnailHeight:160,  //110,
				items:contentGalleryMLN,




                // locationHash:false,
                //         thumbnailHoverEffect:[{'name':'labelSlideUp','duration':300}],
                //         thumbnailLabel:{display:true,position:'overImageOnBottom',descriptionMaxLength:50},
                // thumbnailLazyLoad:true,
                // theme:'clean',
                // colorScheme:'light',
                // locationHash: false,
                // level1: { thumbnailWidth: 200, thumbnailHeight: 120 }
			});

</script>
@endsection --}}
