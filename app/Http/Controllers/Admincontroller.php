<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Product;
use App\Blog;
use App\BlogType;
use App\CommentBLog;
use App\Slide_Show;
use App\Customer;
use App\Admin;

use Session;
use Hash;
use Auth;


class Admincontroller extends Controller
{
    public function getindexadmin()
    {
        return view('admin/page/index');
    }

    public function getproduct()
    {
    	$product = Product::where('Product_ID','<>',0)->paginate(10);
    	return view('admin/page/product',compact('product'));
    }

    public function getdeleteproduct(Request $re,$idproduct)
    {
    	$product = Product::where('Product_ID',$idproduct)->first();
        unlink("public/source/images/product".$product->Image_Product);
        $product->delete();
    	return redirect()->back();
    }

    public function getupdateproduct(Request $req)
    {
    	$product = Product::where('Product_ID',$req->idproduct)->first();
    	return view('admin/page/');

    }

    public function getnewproduct(){
        return view('admin/page/newproduct');
    }

    public function getmanagerblog(){
        $blog = Blog::get();
        $comment = CommentBLog::get();
        return view('admin/page/blog',compact('blog','comment'));
    }

    public function getmanagerslider(){
        $slide = Slide_Show::where('id','<>',-1)->paginate(10);
        return view('admin/page/slider',compact('slide'));
    }

    public function getdeleteblogdetail(Request $re,$idblog)
    {
        $blog = Blog::where('ID_Blog',$idblog)->first();
        $blog->delete();
        return redirect()->back();
    }

    public function getnewblog(){
        return view('admin/page/newblog');
    }

    public function postnewslide(Request $Request){
        if($Request->hasFile('file')){

            $file = $Request->file('file');
            $filetail = $file->getClientOriginalExtension('file');
            if($filetail == "jpg" || $filetail == "png" || $filetail == "jpeg"){

                $filename = $file->getClientOriginalName('file');
                $file->move('public/source/images/slide/',$filename);

                $slide = new Slide_Show;
                $slide->Image = $filename;
                $slide->save();
                
                return redirect()->back();
            }
            else{
                return redirect()->back(); 
            }
        }
        else{
            return redirect()->back(); 
        }
    }

    public function postupdateStatus(Request $Request){
        $idslide = $Request->id;
        $slide = Slide_Show::where('id',$idslide)->first();
        $slide->Status = $Request->status;
        $slide->save();
        return redirect()->back();
    }

    public function getdeleteslider($id){
        $slide = Slide_Show::find($id);
        $slide->delete();
        unlink('public/source/images/slide/'.$slide->Image);
        return redirect()->back();
    }

    public function getloginadmin(){
        return view('admin/page/login');
    }

    public function postcheckloginadmin(Request $Request){
        $username = $Request->username;
        $password = $Request->password;
        $admin = Admin::where('username',$username)->where('password',$password)->first();
        if(count($admin) == 1){
            return redirect('admin');
        }
        else{
            return redirect()->back();
        }
        
    }
}
