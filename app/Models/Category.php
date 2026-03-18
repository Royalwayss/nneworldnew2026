<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public static function get_categories(){
		$plans = [];
		$categories = Category::with('sub_categories')->select('id','category_name','category_url','description','image')->where('parent_id',NULL)->where('category_type','normal-products')->where('status','1')->orderby('sortorder','asc')->get()->toArray();
		return $categories;
	}

	public static function agri_categories(){
		$plans = [];
		$categories = Category::with('sub_categories')->select('id','category_name','category_url','description','image')->where('parent_id',NULL)->where('category_type','agri-products')->where('status','1')->orderby('sortorder','asc')->get()->toArray();
		return $categories;
	}
	
	
	public function sub_categories(){
    	return $this->hasMany('App\Models\Category','parent_id')->where('status','1')->orderby('sortorder','asc');
    }
	public function sub_categories_all(){
    	return $this->hasMany('App\Models\Category','parent_id')->orderby('sortorder','asc');
    }
	
	public static function getcatdetails($catseo){
		
		    if($catseo != 'projects'){
				$getCatdetail = Category::with(['sub_categories'=>function($query){
								$query->with('sub_categories');
							}])->where('category_url',$catseo)->where('status','1')->first();
				$getCatdetail = json_decode(json_encode($getCatdetail),true);
				if(empty($getCatdetail)){
							$resp = array('status'=>false);
							return $resp;
				}else{
					$catids =array();
					$catids[] = $getCatdetail['id'];
					foreach($getCatdetail['sub_categories'] as $subcat){
							$catids[] = $subcat['id'];
							foreach($subcat['sub_categories'] as $subsubcat){
								$catids[] = $subsubcat['id'];
							}
						}
						
						$cat_id = $getCatdetail['id'];
						
						$resp = array('status'=>true,'catids'=>$catids,'catdetail'=>$getCatdetail);
						return $resp;
				}
			}else{
				$categories = Category::get_categories();
				$categories = json_decode(json_encode($categories),true);
				$catids = [];
				foreach($categories as $category){
					$catids[] = $category['id'];
					foreach($category['sub_categories'] as $sub_category){
						$catids[] = $sub_category['id'];
					}
				}
				$catdetail['name'] = 'All projects';
				$catdetail['seo_unique'] = 'projects';
				$resp = array('status'=>true,'catids'=>$catids,'catdetail'=>$catdetail);
				return $resp;
			}
		
	}


   public function parent()
	{
		return $this->belongsTo(Category::class, 'parent_id');
	}
	
	public static function getBreadcrumb($category)
	{
    $breadcrumb = [];

    while ($category) {
        $breadcrumb[] = $category;
        $category = $category->parent;
    }
    $breadcrumb = json_decode(json_encode($breadcrumb),true);
    return array_reverse($breadcrumb);
	
	}
	
}
