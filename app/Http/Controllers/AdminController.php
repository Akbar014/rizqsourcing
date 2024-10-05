<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Category;
use App\Models\CategoryImage;
use App\Models\Contacts;
use App\Models\Slider;
use App\Models\Other;
use App\Models\Query;
use Illuminate\Support\Str;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\HtmlString; 


class AdminController extends Controller
{

    public function store(Request $request)
    {
        // Validate the form inputs
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'nullable|string',
            'subject' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $query = new Query();
        $query->name = $request->name;
        $query->email = $request->email;
        $query->phone = $request->phone;
        $query->subject = $request->subject;
        $query->description = $request->description;
        $query->save();

        // Prepare the email data
        $emailContent = '
            <h1>Contact Information</h1>
            <p><strong>Name:</strong> ' . $validated['name'] . '</p>
            <p><strong>Email:</strong> ' . $validated['email'] . '</p>
            <p><strong>Phone:</strong> ' . $validated['phone'] . '</p>
            <p><strong>Message:</strong> ' . $validated['description'] . '</p>
        ';

        // Send the email
        Mail::send([], [], function ($message) use ($validated, $emailContent) {
            $message->to('akbar.cse47@gmail.com')
                ->subject($validated['subject'])
                ->html($emailContent); // Directly pass the HTML string here
        });

        // Redirect back or show a success message
        // return redirect()->back()->with('success', 'Your message has been sent successfully!');
        return view('frontend.contacts.thank');
    }


    public function Category_wise_products($id){
        // dd($id);
        $category = Category::find($id);
        $products = Product::where('category_id', $id)->get();
        return view('frontend.products.index', compact('category', 'products'));
    }
    public function Category_wise_capability($id){
        $category = Category::find($id);
        $products = Product::where('category_id', $id)->get();
        return view('frontend.products.index', compact('category', 'products'));
    }

    public function othersInfo($param){
        $data = Other::where('type', $param)->first();
        $type= $param;
        return view('frontend.others.index', compact('data', 'type'));
    }

    public function contactUs(){
        $data = Contacts::find(2);
        return view ('frontend.contacts.index', compact('data'));
    }



    public function Category(){
        $categories = Category::where('type','Buying_services')->get();
        $type = 'Buying Services';
        return view('admin.category.index', compact('categories','type'));
    }

    public function capabilities(){
        $categories = Category::where('type','Capabilities')->get();
        $type = 'Capabilities';
        return view('admin.category.index', compact('categories','type'));
    }


    public function storeCategory(Request $request)
    {
        $request->validate([
            'cname' => 'required|string|max:255',
            'image' => 'nullable|image',
            'description' => 'nullable|string',
        ]);

        $category = new Category;
        $category->cname = $request->cname;
        $category->type = $request->type;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            
            // Move the uploaded file to the public/images directory
            $image->move(public_path('images'), $imageName);
    
            // Store the image file name in the database
            $category->image = $imageName;
        }
        $category->description = $request->description;
        $category->save();

        

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $simage) {
                // $image = Image::make($simage);
                // $path = public_path('images/'.time().$simage->getClientOriginalName());
                // $imageName = time().$simage->getClientOriginalName();

                $imageName = time().$simage->getClientOriginalName();
                // $image->move(public_path('images'), $imageName);

                $categoryimage = new CategoryImage();
                $categoryimage->category_id = $category->id;
                $categoryimage->image = $imageName;
                $simage->move('images', $imageName);

                $categoryimage->save();
            }
        }

        // return redirect()->back()->with('success', 'Category created successfully.');
        return $category;
    }

    public function editCategory($id){
        // dd($id);
        $category = Category::findorfail($id);
        return $category;
    }

    // Edit Category
    public function updateCategory(Request $request, $id)
    {
        $category = Category::findOrFail($id);
        
        $request->validate([
            'cname' => 'required|string|max:255',
            'image' => 'nullable|image',
            'description' => 'nullable|string',
        ]);

        $category->cname = $request->cname;
        $category->type = $request->type;

        if ($request->hasFile('image')) {

            if ($category->image && file_exists(public_path('images/' . $category->image))) {
                unlink(public_path('images/' . $category->image));
            }

            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            
            // Move the uploaded file to the public/images directory
            $image->move(public_path('images'), $imageName);
    
            // Store the image file name in the database
            $category->image = $imageName; 
        }


         // Handle multiple images update (unlink old and add new ones)
    if ($request->hasFile('images')) {
        // Unlink and delete all existing related images in CategoryImage model
        $categoryImages = CategoryImage::where('category_id', $category->id)->get();
        foreach ($categoryImages as $categoryImage) {
            // Unlink the image file from the filesystem
            if (file_exists(public_path('images/' . $categoryImage->image))) {
                unlink(public_path('images/' . $categoryImage->image));
            }

            // Delete the related image record from the database
            $categoryImage->delete();
        }

        // Add new images
        foreach ($request->file('images') as $simage) {
            $imageName = time() . '_' . Str::uuid() . '.' . $simage->getClientOriginalExtension();
            $simage->move(public_path('images'), $imageName);

            $categoryImage = new CategoryImage();
            $categoryImage->category_id = $category->id;
            $categoryImage->image = $imageName;
            $categoryImage->save();
        }
    }




        $category->description = $request->description;
        $category->save();

        // return redirect()->back()->with('success', 'Category updated successfully.');
        return $category;
    }

    // Delete Category
    public function deleteCategory($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();

        return redirect()->back()->with('success', 'Category deleted successfully.');
    }

    //index page
    public function Products(){
        $products = Product::all();
        $categories = Category::where('type', 'Buying_services')->get();
        return view('admin.products.index', compact('products','categories'));
    }
    
    // Insert Product
    public function storeProduct(Request $request)
    {
       
        // $request->validate([
        //     'product_name' => 'required|string|max:255',
        //     'product_code' => 'required|string|unique:products',
        //     'image' => 'required|image',
        // ]);

         // dd($request->all());

        $product = new Product;
        $product->product_name = $request->product_name;
        $product->product_code = $request->product_code;
        $product->category_id = $request->category_id;
        $product->type = $request->type;
        $product->description = $request->description;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            
            // Move the uploaded file to the public/images directory
            $image->move(public_path('images'), $imageName);
    
            // Store the image file name in the database
            $product->image = $imageName;
        }

        $product->save();

        // return redirect()->back()->with('success', 'Product created successfully.');
        return $product;
    }

    
    // Edit Product

    public function editProduct($id){
        $product = Product::findorfail($id);
        return $product;
    }

    public function updateProduct(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        // dd($product);
        
        // $request->validate([
        //     'product_name' => 'required|string|max:255',
        //     'product_code' => 'required|string|unique:products,product_code,' . $id,
        //     'image' => 'nullable|image',
        // ]);

        $product->product_name = $request->product_name;
        $product->category_id = $request->category_id;
        $product->product_code = $request->product_code;
        $product->description = $request->description;
        $product->type = $request->type;

        if ($request->hasFile('image')) {

            if ($product->image && file_exists(public_path('images/' . $product->image))) {
                unlink(public_path('images/' . $product->image));
            }

            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            
            // Move the uploaded file to the public/images directory
            $image->move(public_path('images'), $imageName);
    
            // Store the image file name in the database
            $product->image = $imageName;
        }
        $product->save();

        // return redirect()->back()->with('success', 'Product updated successfully.');
        return $product;
    }

    // Delete Product
    public function deleteProduct($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect()->back()->with('success', 'Product deleted successfully.');
    }




    // Display all sliders
    public function sliders()
    {
        $sliders = Slider::orderBy('position', 'ASC')->get();
        return view('admin.slider.index', compact('sliders'));
    }


    // Store a new slider
    public function storeSlider(Request $request)
    {
       
        // $request->validate([
           
        //     'image' => 'required|string',
        // ]);
        // dd($request->all());
        // $slider = Slider::create($request->except('_token'));

        $slider = new Slider();
        $slider->position= $request->position;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            
            // Move the uploaded file to the public/images directory
            $image->move(public_path('images'), $imageName);
    
            // Store the image file name in the database
            $slider->image = $imageName;
        }

        $slider->save();




        // return redirect()->route('sliders.index')->with('success', 'Slider created successfully.');
        return $slider;
    }

    // Show the form to edit a slider
    public function editSlider($id)
    {
        $slider = Slider::find($id);
        // return view('sliders.edit', compact('slider'));
        return $slider;
    }

    // Update the slider
    public function updateSlider(Request $request, $id)
    {
        $slider = Slider::find($id);

        $slider->position= $request->position;
        
        if ($request->hasFile('image')) {

            if ($slider->image && file_exists(public_path('images/' . $slider->image))) {
                unlink(public_path('images/' . $slider->image));
            }
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            
            // Move the uploaded file to the public/images directory
            $image->move(public_path('images'), $imageName);
    
            // Store the image file name in the database
            $slider->image = $imageName;
        }

        $slider->save();

        // return redirect()->route('sliders.index')->with('success', 'Slider updated successfully.');
        return $slider;
    }

    // Delete a slider
    public function destroySlider($id)
    {

        Slider::destroy($id);
        return redirect()->route('sliders.index')->with('success', 'Slider deleted successfully.');
        // return 'Delete Completed';

    }




    public function contact()
    {
        $contact = Contacts::find(2);
        return view('admin.contacts.index', compact('contact'));
    }

    // Show the form to create a new contact
   

    // Store a new contact
    public function storeContact(Request $request)
    {
        $contact = new Contacts();
        $contact->address = $request->address;
        $contact->phone = $request->phone;
        $contact->email = $request->email;
        $contact->others = $request->others;
        $contact->save();
        return $contact;

        // return redirect()->route('contacts.index')->with('success', 'Contact created successfully.');
    }

    // Show the form to edit a contact
    public function editContact($id)
    {
        $contact = Contacts::find(1);
        // return view('contacts.edit', compact('contact'));
        return $contact;
    }

    // Update the contact
    public function updateContact(Request $request, $id)
    {
        // dd( $request->address);
        $contact = Contacts::find(2);
        $contact->address = $request->address;
        $contact->phone = $request->phone;
        $contact->email = $request->email;
        $contact->others = $request->others;
        $contact->save();

        return back();
        // return $contact;
    }

    // Delete a contact
    public function destroyContact($id)
    {
        Contact::destroy($id);
        // return redirect()->route('contacts.index')->with('success', 'Contact deleted successfully.');
        return 'Delete Completed';
    }


    // public function others(){
        
    //     return view('admin.others');
    // }

    // public function others($parameter){
    //     $data = Other::where('type', $parameter)->first();
    //     // dd($data);
    //     return view('admin.others');
    // }

    public function others($parameter)
{
    // $data = Other::where('type', $parameter)->first();
    return view('admin.others', compact('parameter'));
}

    public function company_profile(){
        $data = Other::where('type', 'company_profile')->first();
        $type= 'Company Profile';
        $type1= 'company_profile';
        return view('admin.others', compact('data','type','type1'));
    }

    public function quality(){
        $data = Other::where('type', 'quality')->first();
        $type= 'Quality';
        $type1= 'quality';
        return view('admin.others', compact('data','type','type1'));
    }

    public function compliance(){
        $data = Other::where('type', 'compliance')->first();
        $type= 'Compliance';
        $type1= 'compliance';
        return view('admin.others', compact('data','type','type1'));
    }

    public function production_unit(){
        $data = Other::where('type', 'production_unit')->first();
        $type= 'Production Unit';
        $type1= 'production_unit';
        return view('admin.others', compact('data','type','type1'));
    }
    public function what_we_do(){
        $data = Other::where('type', 'what_we_do')->first();
        $type= 'What we do';
        $type1= 'what_we_do';
        return view('admin.others', compact('data','type','type1'));
    }

    public function sustainability(){
        $data = Other::where('type', 'sustainability')->first();
        $type= 'Sustainability';
        $type1= 'sustainability';
        return view('admin.others', compact('data','type','type1'));
    }
    public function who_we_are(){
        $data = Other::where('type', 'who_we_are')->first();
        $type= 'Who we are';
        $type1= 'who_we_are';
        return view('admin.others', compact('data','type','type1'));
    }

    public function updateothers(Request $request, $type){
        // dd($type);
        $data = Other::where('type', $type)->first();
        $data->description = $request->description;
        $data->save();
        return redirect()->back();
    }

    public function queries(){
        $queries = Query::all();
        return view('admin.query.index', compact('queries'));
    }
}
