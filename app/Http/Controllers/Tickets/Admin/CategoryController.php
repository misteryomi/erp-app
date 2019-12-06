<?php

namespace App\Http\Controllers\Tickets\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Models\Tickets\Category;
use App\Models\DepartmentUnit;
use App\Models\Department;

class CategoryController extends Controller
{
    private $category;

    function __construct(Category $category) {
        $this->category = $category;
    }

    public function index() {
        $categories = $this->category->orderBy('name')->paginate(15);

        return view('tickets.admin.categories.list', compact('categories'));
    }

    // public function new() {
    //     return view('tickets.admin.categories.new');
    // }

    public function store(CategoryRequest $request) {
        $category = $this->category->create($request->except('department_id'));

        if($category) {
            return response(['status' => false, 'Error creating category']);
        }

        return response(['status' => true, 'message' => "Category created successfully!"]);
    }

    public function update() {

    }

    public function delete(Category $category) {
       $delete = $category->delete();

       if(!$delete) {
           $message = 'Error deleting category';
           $alertClass = 'alert-danger';
       }
       $message = 'Category deleted successfully!';
       $alertClass = 'alert-success';

       return redirect()->back()->withMessage($message)->withAlertClass($alertClass);
    }
}
