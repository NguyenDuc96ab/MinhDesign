<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Services\Category\CategoryService;
use App\Http\Services\Introduce\IntroduceService;
use App\Http\Services\Project\ProjectService;
use App\Models\Category;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class WebMainController extends Controller
{
    protected $categoryService;
    protected $projectService;
    protected $introduceService;
    public function __construct(
        CategoryService $categoryService,
        ProjectService $projectService,
        IntroduceService $introduceService
       
    
    ) {
        $this->categoryService = $categoryService;
        $this->projectService = $projectService;
        $this->introduceService = $introduceService;
    }
    public function home()
    {
        $category = Category::where('parent_id', 0)->get();
     
        return view('web.home', [
            'title' => "Trang home",
            'category' => $category,
            
        ]);
    }

    public function sanpham($slug, Request $request, $id)
    {
        $sortBy = $request->input('sort_by', 'manual'); // Mặc định là 'manual'
        // dd($sortBy);
        $displaySlug = $slug;
        //dd($displaySlug);
        if ($slug == 'san-pham') {
            $query = Project::query();
        } else {
            $query = Project::query()->where('category_id', $id);
        }



        // Thêm điều kiện active bằng 1 vào query
        $query->where('active', 1);


        switch ($sortBy) {
            case 'price-ascending':
                $query->orderBy('price');
                break;
            case 'price-descending':
                $query->orderByDesc('price');
                break;
            case 'title-ascending':
                $query->orderBy('name', 'asc');
                break;

            case 'title-descending':
                $query->orderBy('name', 'desc');
                break;
            case 'created-ascending':
                $query->orderBy('created_at', 'asc');
                break;

            case 'created-descending':
                $query->orderBy('created_at', 'desc');
                break;
        }


        $products = $query->paginate(36);


        foreach ($products as $product) {
            // Truy cập quan hệ imgPro của mỗi sản phẩm
            // Và làm gì đó với nó, ví dụ lấy hình ảnh đầu tiên
            if ($product->imgPro->isNotEmpty()) {
                $firstImage = $product->imgPro->first();
                // Bạn có thể thêm hình ảnh đầu tiên vào thuộc tính của mỗi sản phẩm
                $product->firstImage = $firstImage;
            }
        }
          
        $category = Category::where('parent_id', 0)->get();
      
        return view('Web.project.project-list', [
            'products' => $products,
            'displaySlug' => $displaySlug,
            'category' => $category,
            // 'image' =>  $firstImage,
        ]);
    }


    public function detail($id = '', $slug = '')
    {
        // dd($id);
        $post = $this->projectService->getById($id);
        $aaa = $this->projectService->getProjectItem();
        $displaySlug = $slug;

        //dd($bbb);
        foreach ($aaa as $product) {
            // Truy cập quan hệ imgPro của mỗi sản phẩm
            // Và làm gì đó với nó, ví dụ lấy hình ảnh đầu tiên
            if ($product->imgPro->isNotEmpty()) {
                $firstImage = $product->imgPro->first();
                // Bạn có thể thêm hình ảnh đầu tiên vào thuộc tính của mỗi sản phẩm
                $product->firstImage = $firstImage;
            }
        }

       

        $category = Category::where('parent_id', 0)->get();
      

        $categoryName = $post->category->name;
        $categorySlug = Str::slug($categoryName);

        

        return view('Web.project.project-detail', [
            'postObject' => $post,
            'productt' => $aaa,
            'displaySlug' => $displaySlug,
            'category' => $category,
             'categories'=> $categorySlug
        ]);
    }


    public function gioithieu($slug)
    {
        $formattedSlug = Str::slug($slug);

        $post = $this->introduceService->getPostListBySlug($formattedSlug);

        $category = Category::where('parent_id', 0)->get();

        return view('Web.process.process', [
            'postObject' => $post,
            'category' => $category
        ]);
    }
}
