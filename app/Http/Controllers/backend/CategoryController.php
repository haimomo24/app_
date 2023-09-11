<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Link;
use Illuminate\Support\Str;
Use App\Http\Requests\CategoryStoreRequest;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list_category = Category::where('status','!=',0)->get();
        return view('backend.category.index', compact('list_category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $list_category = Category::where('status','!=',0)->get();
        $html_parent_id ='';
        $html_sort_order = '';
        foreach ($list_category as $item){
            $html_parent_id .='<option value="'. $item->id .'">'. $item->name .'</option>';
            $html_sort_order .='<option value="'. $item->sort_order.'">Sau:'. $item->name  .'</option>';
        }
        return view('backend.category.create',compact('html_parent_id','html_sort_order'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryStoreRequest $request)
    {
        $category = new Category;
        $category->name =$request->name;
        $category->slug =Str::slug($category->name =$request->name,'-');
        $category->metakey =$request->metakey;
       
        $category->image =$request->image;
        $category->metadesc =$request->metadesc;
        $category->parent_id =$request->parent_id;
        $category->sort_order =$request->sort_order;
        $category->status =$request->status;
        $category->created_at =date('Y-m-d H:i:s');
        $category->created_by = 1;
        $category->updated_by=1;
        $category->status =1;
        if($category->save())
        {
            $link = new Link();
            $link->slug = $category->slug;
            $link->table_id = $category->id;
            $link->type ='category';
            $link->save();
            return redirect()->route('category.index')->with('message',['type'=>'success',
            'msg' => 'Thêm Thành công   !']);
            
            }
            else{
                return redirect()->route('category.index')->with('message',['type'=>'danger',
                'msg' => 'Thêm Thành công   !']);
        }
        ;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $category = Category::find($id);
        if ($category == null)
        {
            return redirect()->route('category.index')->with('message',['type'=>'danger',
        'msg' => 'mẫu tin không tồn tại  !']);
        }
        else
        {
            return view('backend.category.show',compact('category'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        echo " sửa cái địt mẹ mày ";
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
//status category
    public function status($id)
    {
        $category = Category::find($id);
        if ($category == null)
        {
            return redirect()->route('category.index')->with('message',['type'=>'danger',
        'msg' => 'mẫu tin không tồn tại  !']);
        }
        else
        {
            $category->status =($category->status == 1)?2:1;
            $category->updated_at=date('Y-m-d H:i:s');
            $category->updated_by=1;
            $category->save();
            return redirect()->route('category.index')->with('message',['type'=>'success',
        'msg' => 'thay đổi trạng thái thành công !']);
        }
    }
       
    public function delete($id)
    {
        $category = Category::find($id);
        if ($category == null)
        {
            return redirect()->route('category.index')->with('message',['type'=>'danger',
        'msg' => 'mẫu tin không tồn tại  !']);
        }
        else
        {
            $category->status =0;
            $category->updated_at=date('Y-m-d H:i:s');
            $category->updated_by=1;
            $category->save();
            return redirect()->route('category.index')->with('message',['type'=>'success',
        'msg' => 'xóa thành công  !']);
        }

    }
   
}
