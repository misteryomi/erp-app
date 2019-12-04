<?php

namespace App\Http\Controllers\Documents;

use App\Http\Controllers\Controller;


class FileManagerController extends Controller {

    public function __invoke() {

        return view('documents.index');
    }
}
