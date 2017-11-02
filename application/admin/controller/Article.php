<?php
namespace app\admin\controller;

use think\Loader;

class Article extends \think\Controller
{
    public function add()
    {
        $data['title'] = input('post.title');
        $data['category_id'] = input('post.colId');
        $data['author'] = input('post.author');
        $data['img_url'] = input('post.smallimg')?:'';
        $data['content'] = input('post.content');
        $data['create_date_time'] = date('Y-m-d H:i:s');
        $data['update_time'] = date('Y-m-d H:i:s');
        $data['invalid'] = 0;
        $data['status'] = 1;
        $article = loader::model('Article');
        $article->data($data);
        $is = $article->save();
        if($is){
            return 1;
            //添加成功
        }else{
            return 2;
            //添加失败
        }
    }

    public function insert()
    {
        $category = loader::model('Category');
        $category_list = $category->where(array('invalid'=>0,'status'=>1))->select();
        $this->assign('category_list',$category_list);
        return view('insert');
    }

    public function design()
    {
        return view('design');
    }
}