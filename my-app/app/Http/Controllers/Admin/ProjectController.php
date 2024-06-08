<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Services\Category\CategoryService;
use App\Http\Services\Project\ProjectService;
use App\Models\Category;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    protected $projectService;
    protected $categoryService;
    public function __construct(ProjectService $projectService, CategoryService $categoryService)
    {
        $this->projectService = $projectService;
        $this->categoryService = $categoryService;
    }
    public function create()
    {
        $data = Category::all();
        $htmloption = $this->getCategory($parentId = '');
        return view('admin.project.add', [
            'title' => 'Tạo mới dự án',
            'htmloption' => $htmloption
        ]);
    }

    public function getCategory($parentId)
    {
        $data = Category::all();
        $htmloption = $this->categoryService->categoryRecusive($parentId, $data);

        return  $htmloption;
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $this->projectService->create($request);
        return redirect()->back();
    }

    public function index()
    {

        return view('admin.project.list', [
            'title' => 'Danh sách dự án',
            'products' => $this->projectService->getAll(),

        ]);
    }

    public function show(Project $project)
    {
        $htmloption = $this->getCategory($project->category_id);
        return view('admin.project.edit', [
            'title' => 'Sửa dự án',
            'products' => $project,
            'haha' => $project->imgPro,
            'htmlOption' => $htmloption
        ]);
    }

    public function update(Project $project, Request $request)
    {

        $this->projectService->update($request, $project);
        return redirect('/admin/projects/list');
    }

    public function destroy(Request $request)
    {
        $result = $this->projectService->destroy($request);
        if ($result) {
            return response()->json([
                'error' => false,
                'message' => 'Xóa thành công dự án'
            ]);
        }

        return response()->json(['error' => true]);
    }

    
}
