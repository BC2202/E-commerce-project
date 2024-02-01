<?php

namespace App\Http\Controllers;

use App\Notifications\SendEmailNotification;
use Illuminate\Http\Request;
use App\Models\Catagory;
use App\Models\Product;
use App\Models\Order;
use PDF;
use Notification;
use illuminate\Support\Facades\Auth;


class AdminController extends Controller
{
    //
    public function view_catagory()
    {
        if(Auth::id())
        {
             $data=catagory::all();

            return view('admin.catagory',compact ('data'));
        }
        else{
            return redirect('login');
        }
    }

    public function add_catagory(Request $request)
    {
        $data=new catagory;
        $data->catagory_name=$request->catagory;
        $data->save();
        return redirect()->back()->with('message', 'Catagory Added Successfully');
    }



    public function delete_catagory($id)
    {
        $data=catagory::find($id);
        $data->delete();
        return redirect()->back()->with('message','Catagory Deleted Successfully');
    }

    public function view_product()
    {
        $catagory=catagory::all();
        return view('admin.product',compact('catagory'));
    }
    public function add_product(Request $request){
        $product=new product;

        $product->title=$request->title;

        $product->description=$request->description;

        $product->price=$request->price;

        $product->quantity=$request->quantity;

        $product->discount_price=$request->dis_price;

        $product->catagory=$request->catagory;
        
        $image=$request->image;

    //     $imagename=time().'.'.$image->getclientOriginalExtension();
    //     $request->image->move('product',$imagename);
    //     $product->image=$imagename;

    //     //image 1
    //     $image1=$request->image1;
    //     $imagename1=time().'.'.$image1->getclientOriginalExtension();
    //     $request->image1->move('product',$imagename1);
    //     $product->image1=$imagename1;
        
    //     //image 2
    //     $image2=$request->image2;
    //     $imagename2=time().'.'.$image2->getclientOriginalExtension();
    //     $request->image2->move('product',$imagename2);
    //     $product->image2=$imagename2;
    //     //image 1
    //     $image3=$request->image3;
    //     $imagename3=time().'.'.$image3->getclientOriginalExtension();
    //     $request->image3->move('product',$imagename3);
    //     $product->image3=$imagename3;
    //     //image 1
    //     $image4=$request->image4;
    //     $imagename4=time().'.'.$image4->getclientOriginalExtension();
    //     $request->image4->move('product',$imagename4);
    //     $product->image4=$imagename4;
    //     //image 1
    //     $image5=$request->image5;
    //     $imagename5=time().'.'.$image5->getclientOriginalExtension();
    //     $request->image5->move('product',$imagename5);
    //     $product->image5=$imagename5;
    //     //image 1
    //     $image6=$request->image6;
    //     $imagename6=time().'.'.$image6->getclientOriginalExtension();
    //     $request->image6->move('product',$imagename6);
    //     $product->image6=$imagename6;
    //     //image 1
    //     $image7=$request->image7;
    //     $imagename7=time().'.'.$image7->getclientOriginalExtension();
    //     $request->image7->move('product',$imagename7);
    //     $product->image7=$imagename7;
    //     //image 1
    //     $image8=$request->image8;
    //     $imagename8=time().'.'.$image8->getclientOriginalExtension();
    //     $request->image8->move('product',$imagename8);
    //     $product->image8=$imagename8;

    //     //image 1
    //     $image9=$request->image9;
    //     $imagename9=time().'.'.$image9->getclientOriginalExtension();
    //     $request->image9->move('product',$imagename9);
    //     $product->image9=$imagename9;
    //     //image 1
    //     $image10=$request->image10;
    //     $imagename10=time().'.'.$image10->getclientOriginalExtension();
    //     $request->image10->move('product',$imagename10);
    //     $product->image10=$imagename10;
    //     //image 1
    //     $image11=$request->image11;
    //     $imagename11=time().'.'.$image11->getclientOriginalExtension();
    //     $request->image11->move('product',$imagename11);
    //     $product->image11=$imagename11;
    //     //image 1
    //     $image12=$request->image12;
    //     $imagename12=time().'.'.$image12->getclientOriginalExtension();
    //     $request->image12->move('product',$imagename12);
    //     $product->image12=$imagename12;
    //     //image 1
    //     $image13=$request->image13;
    //     $imagename13=time().'.'.$image13->getclientOriginalExtension();
    //     $request->image13->move('product',$imagename13);
    //     $product->image13=$imagename13;
    //     //image 1
    //     $image14=$request->image14;
    //     $imagename14=time().'.'.$image14->getclientOriginalExtension();
    //     $request->image14->move('product',$imagename14);
    //     $product->image14=$imagename14;
    //     //image 1
    //     $image15=$request->image15;
    //     $imagename15=time().'.'.$image15->getclientOriginalExtension();
    //     $request->image15->move('product',$imagename15);
    //     $product->image15=$imagename15;
    //     //image 1
    //     $image16=$request->image16;
    //     $imagename16=time().'.'.$image16->getclientOriginalExtension();
    //     $request->image16->move('product',$imagename16);
    //     $product->image16=$imagename16;
    //     //image 1
    //     $image17=$request->image17;
    //     $imagename17=time().'.'.$image17->getclientOriginalExtension();
    //     $request->image17->move('product',$imagename17);
    //     $product->image17=$imagename17;
    //     //image 1
    //     $image18=$request->image18;
    //     $imagename18=time().'.'.$image18->getclientOriginalExtension();
    //     $request->image18->move('product',$imagename18);
    //     $product->image18=$imagename18;
    //     //image 1
    //     $image19=$request->image19;
    //     $imagename19=time().'.'.$image19->getclientOriginalExtension();
    //     $request->image19->move('product',$imagename19);
    //     $product->image19=$imagename19;
    //     //image 1
    //     $image20=$request->image20;
    //     $imagename20=time().'.'.$image20->getclientOriginalExtension();
    //     $request->image20->move('product',$imagename20);
    //     $product->image20=$imagename20;
    //     //image 1
    //     $image21=$request->image21;
    //     $imagename21=time().'.'.$image21->getclientOriginalExtension();
    //     $request->image21->move('product',$imagename21);
    //     $product->image21=$imagename21;
    //     //image 1
    //     $image23=$request->image22;
    //     $imagename23=time().'.'.$image23->getclientOriginalExtension();
    //     $request->image23->move('product',$imagename23);
    //     $product->image23=$imagename23;
    //     //image 1
    //     $image24=$request->image24;
    //     $imagename24=time().'.'.$image24->getclientOriginalExtension();
    //     $request->image24->move('product',$imagename24);
    //     $product->image24=$imagename24;
    //       // Handle video upload
    // if ($request->hasFile('vedio')) {
    //     $vedio = $request->file('vedio');
    //     $vedioName = time() . '_vedio.' . $vedio->getClientOriginalExtension();
    //     $vedio->move('product', $vedioName);
    //     $product->vedio = $vedioName;
    // }

    // Handle the main image
if ($request->hasFile('image')) {
    $image = $request->file('image');
    $imageName = time() . '.' . $image->getClientOriginalExtension();
    $image->move('product', $imageName);
    $product->image = $imageName;
}

// Handle other images using a loop
for ($i = 1; $i <= 24; $i++) {
    $inputName = 'image' . $i;
    
    if ($request->hasFile($inputName)) {
        $image = $request->file($inputName);
        $imageName = time() . '_image' . $i . '.' . $image->getClientOriginalExtension();
        $image->move('product', $imageName);
        $product->$inputName = $imageName;
    }
}

// Handle video upload
if ($request->hasFile('vedio')) {
    $video = $request->file('vedio');
    $videoName = time() . '_video.' . $video->getClientOriginalExtension();
    $video->move('product', $videoName);
    $product->vedio = $videoName;
}

        $product ->save();
        return redirect()->back()->with('message','Product Added Successfully');
    }

    public function show_product()
    {
        $product=product::all();
        return view('admin.show_product',compact('product'));
    }

    public function delete_product($id)
    {
        $product=product::find($id);

        $product->delete();

        return redirect()->back()->with('message','Product Deleted Successfully');
    }
    
    public function update_product($id)
    {
        $product=product::find($id);
        $catagory=catagory::all();
        return view('admin.update_product',compact('product','catagory'));
    }

    public function update_product_confirm(Request $request,$id)
    {
        if(Auth::id())
        {
            $product=product::find($id);
        
            $product->title=$request->title;
        
            $product->description=$request->description;
        
            $product->price=$request->price;
        
            $product->discount_price=$request->dis_price;
        
            $product->quantity=$request->quantity;
        
            $product->catagory=$request->catagory;
        
            $image=$request->image;

            $imagename=time().'.'.$image->getClientOriginalExtension();
 
            $request->image->move('product',$imagename);

            $product->image=$imagename;
        
            $product->save();

            return redirect()->back()->with('message','Product Update Successfully');
        }
        else
        {
            return redirect('login');
        }
    }


    public function order()
    {
        $order=order::all();
        return view('admin.order',compact('order'));
    }

    public function delivered($id)
    {
        $order=order::find($id);
        $order->delivery_status="delivered";
        $order->payment_status='paid';
        $order->save();

        return redirect()->back();
    }

    public function print_pdf($id)
    {
        $order=order::find($id);
        $pdf=PDF::loadview('admin.pdf',compact('order'));
 
        return $pdf->download('order_details.pdf');
    }

    public function send_email($id)
    {   
        $order=order::find($id);
        return view('admin.email_info',compact('order'));
    }

    public function send_user_email(Request $request,$id)
    {
        $order=order::find($id);

        $details=[
            'greeting'=>$request->greeting,
            'firstline'=>$request->firstline,
            'body'=>$request->body,
            'button'=>$request->button,
            'url'=>$request->url,
            'lastline'=>$request->lastline,
        ];

        Notification::send($order,new SendEmailNotification($details));
        return redirect()->back();
    }

    public function searchdata(Request $request)
    {
        $searchrText=$request->search;

        $order=order::where('name','LIKE',"%$searchrText%")->orWhere('phone','LIKE',"%$searchrText%")->orWhere('product_title','LIKE',"%$searchrText%")->get();
        return view('admin.order',compact('order'));
    }
}
