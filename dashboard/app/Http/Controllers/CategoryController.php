<?php

namespace App\Http\Controllers;

use App\DataTables\CategoryDataTable;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class CategoryController extends Controller {
    public function index() {
        if (\Illuminate\Support\Facades\Schema::hasColumn('categories', 'sort_order')) {
            $category = Category::orderBy('sort_order', 'asc')->orderBy('id', 'asc')->get();
        } else {
            $category = Category::orderBy('id', 'asc')->get();
        }

        return view( 'pages.category', compact( 'category' ) );
    }

    public function addcategory(Request $request) {
        try {
            $categoryname = $request->category_name;
            $sortOrder = (int) $request->sort_order;

            if (!empty($sortOrder)) {
                // If sortOrder already exists, swap or shift existing items down
                $existing = Category::where('sort_order', $sortOrder)->first();
                if ($existing) {
                    // Shift all categories >= requested sortOrder by +1
                    Category::where('sort_order', '>=', $sortOrder)->increment('sort_order');
                }
            } else {
                $sortOrder = (Category::max('sort_order') ?? 0) + 1;
            }

            // Handle image upload
            if ($request->hasFile('catgory_image')) {
                $image = $request->file('catgory_image');
                $imageName = time() . '_' . $image->getClientOriginalName();
                $image->move(public_path('uploads/categories'), $imageName);

                $imagePath = 'uploads/categories/' . $imageName;
            } else {
                $imagePath = null;
            }

            $newCategory = Category::create([
                'category_name' => $categoryname,
                'category_image' => $imagePath,
                'sort_order' => $sortOrder,
                'status' => 1,
            ]);

            return response()->json([
                'status' => '200',
                'message' => 'Category Added Successfully',
                'data' => $newCategory
            ]);
        } catch (\Throwable $th) {
            Log::error($th);
            return response()->json([
                'status' => '500',
                'message' => 'Unable to add category'
            ]);
        }
    }

    public function updatecategory(Request $request){
         $catid = $request->categoryId;
         $catename = $request->category_name;
         $newSortOrder = (int) $request->sort_order;

         $updatecat = Category::findOrFail($catid);
         $oldSortOrder = (int) $updatecat->sort_order;

          $swappedCatData = null;
          if (!empty($newSortOrder) && $newSortOrder != $oldSortOrder) {
              $existing = Category::where('sort_order', $newSortOrder)
                                  ->where('id', '!=', $catid)
                                  ->first();
              if ($existing) {
                  $existing->update(['sort_order' => $oldSortOrder > 0 ? $oldSortOrder : (Category::max('sort_order') + 1)]);
                  $swappedCatData = [
                      'id' => $existing->id,
                      'sort_order' => $existing->sort_order
                  ];
              }
              $updatecat->sort_order = $newSortOrder;
          } elseif ($oldSortOrder == 0 && empty($newSortOrder)) {
              $updatecat->sort_order = (Category::max('sort_order') ?? 0) + 1;
          }

            if ($request->hasFile('catgory_image')) {
                 $image = $request->file('catgory_image');
                 $imageName = time() . '_' . $image->getClientOriginalName();
                 $image->move(public_path('uploads/categories'), $imageName);

                 $imagePath = 'uploads/categories/' . $imageName;

                   $updatecat->update([
                 "category_name" => $catename,
                 "category_image" => $imagePath,
                 "sort_order" => $updatecat->sort_order,
             ]);

               return response()->json([
                 'status' => '200',
                 'message' => 'Category updated & sort order swapped successfully!',
                 'swapped' => $swappedCatData,
                 'updated' => [
                     'id' => $catid,
                     'name' => $catename,
                     'sort_order' => $updatecat->sort_order
                 ]
             ]);

             }
             else{
                  $updatecat->update([
                 "category_name" => $catename,
                 "sort_order" => $updatecat->sort_order,
             ]);

               return response()->json([
                 'status' => '200',
                 'message' => 'Category updated & sort order swapped successfully!',
                 'swapped' => $swappedCatData,
                 'updated' => [
                     'id' => $catid,
                     'name' => $catename,
                     'sort_order' => $updatecat->sort_order
                 ]
             ]);

             }
    }

    public function destroy($id){
        $category = Category::findOrFail($id);
        $category->delete();
        $product = Product::where('category_id', $id)->delete();

          return response()->json([
                'status' => '200',
                'message' => 'Category Delete Successfully'
            ]);

    }


    public function getCategories() {
        return datatables()->eloquent( Category::query() )->toJson();
    }
}
