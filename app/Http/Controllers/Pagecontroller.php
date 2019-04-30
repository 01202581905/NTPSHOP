<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Slide_Show;
use App\Product;
use App\Category;
use App\Cart;
use App\Customer;
use App\Order;
use App\Order_Detail;
use App\Contact;
use App\Mail;
use App\Blog;
use App\BlogType;
use App\CommentBlog;
use Session;
use Hash;
use Auth;
use Validator;

class Pagecontroller extends Controller
{
    public function getindex()
    {
    	$slide = Slide_Show::all();
        $new_product = Product::where('New',1)->get()->take(8);
        $sale_product = Product::where('Discount','<>',0)->take(8)->get();
        $top_product = Product::all()->take(4);
        $blog = Blog::all()->take(3);
    	//return view('page/trangchu',['slide'=>'$slide']);
    	return view('page/trangchu',compact('slide','new_product','sale_product','top_product','blog'));
    }

    public function getcategoryproduct($category)
    {  
        $typeproduct = Category::all();
        $product = Product::where('ID_Category',$category)->paginate(12);
        $ctgr = Category::where('Category_ID',$category)->first();
    	return view('page/categoryproduct',compact('product','typeproduct','ctgr'));

    }


    public function getproduct()
    {
        $typeproduct = Category::all();
        $product = Product::where('Product_ID','<>',0)->paginate(12);
        return view('page/product',compact('product','typeproduct'));

    }

    public function getdetail(Request $request)
    {
        $sanpham = Product::where('Product_ID',$request->idproduct)->first();
        $likeproduct = Product::where('ID_Category',$sanpham->ID_Category)->take(8)->get();
    	return view('page/detailproduct',compact('sanpham','likeproduct'));
    }

    public function getregister()
    {
        if(Session::has('idcus'))
            return redirect('member');
        else
            return view('page.register');
    	
    }

    public function postregister(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'user_name'=>'bail|required|unique:users|min:8|max:16',
            'password'=>'bail|required|min:8|max:20|not_regex:/^&.$+/',
            'confirm'=>'bail|same:password',
            'name'=>'bail|required|alpha|max:16',
            'gender'=>'bail|required|min:3|max:4',
            'phone'=>'bail|required|unique:users|numberic|min:10|max:15',
            'gender'=>'bail|required|min:3|max:4',
            'email'=>'bail|required|unique:users|email',
            'address'=>'bail|required'
        ]);
            $user = new Customer;
            $user->Name_Customer = $request->name;
            $user->name = $request->user_name;
            $user->password = Hash::make($request->password);
            $user->Gender = $request->gender;
            $user->Email = $request->email;
            $user->Phone = $request->phone;
            $user->Address = $request->address;
            $user->save();
                return view('page.register',['thanhcong'=>'c']);
        if($validator->fails()){
                return view('page.register',['thatbai'=>'c']);
        }

    }

    public function postlogin(Request $req)
    {
        $this->validate($req,
            [
                'user_name'=>'required',
                'pass_word'=>'required'
            ],
            [
                'user_name.required'=>'Vui lòng nhập tên tài khoản !',
                'pass_word.required'=>'Vui lòng nhập mật khẩu !'
            ]);
        $name = $req->user_name;
        $pass = $req->pass_word;
        $credentials = array('name'=>$name,'password'=>$pass);
        if(Auth::attempt($credentials))
        {
            $iduser = Customer::where('name',$name)->select('id','Name_Customer','Avatar')->first();
            Session::put('idcus',$iduser);
            return view('page.login',['thanhcong'=>'Đăng nhập thành công']);
        }
        else
        {
            return view('page.login',['thatbai'=>'Đăng nhập thất bại']);
        }
    }

    public function getlogin(Request $req)
    {
        if(Session::has('idcus'))
            return redirect('member');
        else
    	   return view('page/login');
    }

    public function getcontact()
    {
    	return view('page/contact');
    }

    public function getcart()
    {
    	return view('page/cart');
    }

    public function getblog()
    {
        $blog = Blog::where('ID_Blog','<>',0)->paginate(4);
        $type = BlogType::all();
        $product = Product::all()->take(10);
    	return view('page/blog',compact('blog','type','product'));
    }

    public function getblogdetail(Request $req)
    {
        $blog = Blog::where('ID_Blog',$req->blogid)->first();
        $type = BlogType::all();
        $product = Product::all()->take(10);
        $comment = CommentBlog::where('Comment_BlogID',$req->blogid)->get();
        return view('page/blogdetail',compact('blog','type','product','comment'));
    }
    public function getabout()
    {
    	return view('page/about');
    }

    public function getaddcart(Request $request,$Product_ID)
    {
        $product = Product::where('Product_ID',$Product_ID)->first();
        $oldCart = Session('cart')?Session::get('cart'):null;
        $cart = new Cart($oldCart);
        $cart->add($product,$Product_ID);
        $request->session()->put('cart',$cart);
        return redirect()->back();
    }

    public function postaddcart2(Request $Request,$Product_ID){

        $product = Product::where('Product_ID',$Product_ID)->first();
        $oldCart = Session('cart')?Session::get('cart'):null;
        $cart = new Cart($oldCart);
        $soluong = $Request->numproduct;
        $cart->add2($product,$Product_ID,$soluong);
        $Request->session()->put('cart',$cart);
        return redirect()->back();
    }

    public function getlogout()
    {
        if(Session::has('idcus')){
            Session::flush();
            return redirect('login');
        }  
        else
            return redirect('login');
    }

    public function getsearch(Request $request)
    {
        $typeproduct = Category::all();
        $product = Product::where('Name_Product','like','%'.$request->search.'%')->get();
        return view('page/search',compact('product','typeproduct'));
    }

    public function getdelete($Product_ID)
    {
        $oldCart = Session::has('cart')?Session::get('cart'):null;
        $cart = new Cart($oldCart);
        $cart->removeItem($Product_ID);
        if(count($cart->items) > 0)
        {
            Session::put('cart',$cart);
        }
        else
        {
            Session::forget('cart');
        }
        return redirect()->back();
    }

    public function postorder(Request $request)
    {   
        $cart = Session::get('cart');

        $customer = new Order;
        if(Session::has('idcus'))
        {
            $idcus = Session::get('idcus')['id'];
            $customer->ID_Customer = $idcus;
        }
        $customer->Customer_Name = $request->ten;
        $customer->Create_Date = date('Y-m-d');
        $customer->Total_Money = $cart->totalPrice;
        $customer->Customer_Email = $request->mail;
        $customer->Customer_Phone = $request->sdt;
        $customer->Customer_Address = $request->tinh . $request->huyen . $request->xa . $request->diachi;
        $customer->Customer_Messeger = $request->note;
        $customer->save();

        $idorder = Order::select('Order_ID')->max('Order_ID');

        foreach($cart->items as $key => $value)
        {
            $bill = new Order_Detail;
            $bill->ID_Order = $idorder;
            $bill->ID_Product = $key;
            $bill->Quantity = $value['quantity'];
            $bill->Price_Product = $value['price']/$value['quantity'];
            $bill->save();
        }
        Session::forget('cart');
        return view('page/cart')->with(['thanhcong1'=>'c']);
    }
    
    public function postgopy(Request $request)
    {
        $this->validate($request,
            [
                'name'=>'required',
                'phone'=>'required',
                'email'=>'required|email',
                'message'=>'required'
            ],
            [
                'name.required'=>'Vui lòng điền tên của bạn',
                'phone.required'=>'Vui lòng điền số điện thoại',
                'email.required'=>'Vui lòng điền email',
                'email.email'=>'Vui lòng điền mail đúng định dạng',
                'message.required'=>'Vui lòng nhập ý kiến đóng góp'
            ]);
        $contact = new Contact;
        $contact->Name = $request->name;
        $contact->Phone = $request->phone;
        $contact->Mail = $request->email;
        $contact->Message = $request->message;
        $contact->save();
        return redirect()->back();
    }

    public function postmail(Request $request)
    {
        $this->validate($request,
            [
                'email'=>'required|email'
            ],
            [
                'email.required'=>'Vui lòng điền mail !',
                'email.email'=>'Vui lòng điền đúng mail'
            ]);
        $gmail = new Mail();
        $gmail->G_name = $request->email;
        $gmail->save();
        return redirect()->back();
    }

    public function postcommentblog(Request $req)
    {
        $this->validate($req,
            [
                'comment'=>'required',
            ],
            [
                'comment.required'=>'Vui lòng điền nội dung góp ý',
            ]);
        $avatar = Session::get('idcus')['Avatar'];
        $name   = Session::get('idcus')['Name_Customer'];
        $comment = new CommentBlog;
        $comment->avatar = $avatar;
        $comment->name = $name;
        $comment->Comment_Content = $req->comment;
        $comment->Comment_BlogID = $req->id;
        $comment->save();

        return redirect()->back();
    }

    public function getmember(Request $req){
        if(Session::has('idcus'))
        {
            $idcustomer = Session::get('idcus')['id'];
            $infouser = Customer::find($idcustomer);
            return view('page.member',compact('infouser'));
        }
        else
            return redirect('login');
    }

    public function getpassword(Request $req){
        if(Session::has('idcus'))
            return view('page.password');
        else
            return redirect('login');     
    }

    public function getddh(Request $req){
        if(Session::has('idcus'))
        {
            $idcustomer = Session::get('idcus')['id'];
            $infouser = Customer::find($idcustomer);
            $order = Order::where('ID_Customer','$idcustomer')->get();
            return view('page.order',compact('infouser','order'));
        }
        else
            return redirect('login');
        
    }

    public function postinformation(Request $request){

        $validator = Validator::make($request->all(),[
            'name'=>'bail|required|alpha|min:8|max:16',
            'phone'=>'bail|required|numberic|min:10|max:15',
            'gender'=>'bail|required|min:3|max:4',
            'email'=>'bail|required|unique:users|email',
            'address'=>'bail|required'
        ]);
        $id = Session::get('idcus')['id'];
        $infouser = Customer::find($id);
        $updateuser = Customer::find($id);

        $updateuser->Name_Customer = $request->name;
        $updateuser->Phone = $request->phone;
        $updateuser->Email = $request->email;
        $updateuser->Address = $request->address;
        $updateuser->save();
            return view('page/member',compact('infouser'))->with(['thanhcong1'=>'c']);
        if($validator->fails()){
            return view('page/member',compact('infouser'))->with(['thatbai2'=>'c']);
        }
    }

    public function postrepassword (Request $request){
        $newpass = $request->newpassword;
        $confirm = $request->newpassword2;
        $id = Session::get('idcus')['id'];
            if(strlen($newpass) >= 8 && strlen($newpass) <=20){
                if($newpass === $confirm){
                    $updateuser = Customer::find($id);
                    $updateuser->password = Hash::make($newpass);
                    $updateuser->save();
                    return view('page/password')->with(['thanhcong'=>'c']);
                }
                else{
                    return view('page/password')->with(['thatbai4'=>'c']);
                }
            }
            else{
                return view('page/password')->with(['thatbai3'=>'c']);
            }
        }

    public function postupload(Request $request){

        $idcustomer = Session::get('idcus')['id'];
        $infouser = Customer::find($idcustomer);
        if($request->hasFile('file')){

            $file = $request->file('file');
            $filetail = $file->getClientOriginalExtension('file');
            $id = Session::get('idcus')['id'];
            $updateuser = Customer::find($id);

            if($filetail == "jpg" || $filetail == "png" || $filetail == "jpeg"){

                if($updateuser->Avatar != "C1"){
                    unlink("public/source/images/avatar/".$updateuser->Avatar);
                } 
                $file->move('public/source/images/avatar',$idcustomer.".$filetail");
                $updateuser->Avatar = $idcustomer.".$filetail";
                $updateuser->save();

                return view('page/member',compact('infouser'))->with(['thanhcong'=>'c']);
            }
            else{
                return view('page/member',compact('infouser'))->with(['thatbai1'=>'c']);
            }
        }
        else{
            return view('page/member',compact('infouser'))->with(['thatbai'=>'c']);
        }
    }

    public function getdeletecart(Request $Request){
        Session::forget('cart');
        return redirect()->back();
    }

    public function getup(Request $Request,$Product_ID){
        $product = Product::where('Product_ID',$Product_ID)->first();
        $oldCart = Session('cart')?Session::get('cart'):null;
        $cart = new Cart($oldCart);
        $soluong = $Request->numproduct;
        $cart->add($product,$Product_ID,$soluong);
        $Request->session()->put('cart',$cart);
        return redirect()->back();
    }

    public function getdown(Request $Request,$Product_ID){

        $product = Product::where('Product_ID',$Product_ID)->first();
        $oldCart = Session('cart')?Session::get('cart'):null;
        $cart = new Cart($oldCart);
        $soluong = $Request->numproduct;
        $cart->down($product,$Product_ID,$soluong);
        $Request->session()->put('cart',$cart);
        return redirect()->back();
    }
}
