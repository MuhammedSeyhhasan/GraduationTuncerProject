<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Urun;
use Illuminate\Support\Str;
use Symfony\Component\Console\Descriptor\Descriptor;
use App\Http\Controllers\UrunsController;


class UrunsController extends Controller
{
   
   
    public function dashboard() {
        $count = Urun::count(); // حساب عدد المنتجات
        return view('admin.dashboard', compact('count'));
    }


    public function index(){
        $products = Urun::paginate(8);  // جلب جميع المنتجات
        return view('urunlerimiz', compact('products'))
        ->with('i',(request()->input('page',1) -1) *10  );  // تمرير المتغير إلى  View
    }

    public function adminurunlerimiz(){
        
        $products = Urun::all(); 
        return view('admin.urunlerimiz', compact('products'));
    }

    public function create(){
        return view('admin.Uruns.add');
    }


    public function store(Request $request){
    
        $request->validate([
            'proname' => 'required|string|max:255',
            'prodescription' => 'nullable|string|max:1000',
            'proimage' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $Urun = new Urun();
        $Urun->proname = $request->proname;
        $Urun->prodescription = $request->prodescription;

        // التعامل مع الصورة المرفوعة
        if ($request->hasFile('proimage')) {
            $image = $request->file('proimage');
            $imageName = time() . '_' . $image->getClientOriginalName(); // اسم فريد للصورة
            $image->move(public_path('uploads'), $imageName); // رفع الصورة إلى مجلد uploads داخل public
            $Urun->proimage = $imageName; // تخزين اسم الصورة في قاعدة البيانات
        }

            $Urun->save();

            return redirect()->back()->with('success', 'Product added successfully!');
    }

    
    
    public function edit($Urun){
            return view('admin.uruns.edit', [
                'Uruns' => Urun::findOrFail($Urun)
            ]);
    }


    public function update(Request $request, $id){
        // جلب المنتج من قاعدة البيانات
        $uruns = Urun::findOrFail($id);

        // تحديث الحقول النصية
        $uruns->proname = strip_tags($request->input('proname'));
        $uruns->prodescription = strip_tags($request->input('prodescription'));

        // التحقق إذا كانت هناك صورة جديدة مرفوعة
        if ($request->hasFile('proimage')) {
            // حذف الصورة القديمة إذا كانت موجودة
            if ($uruns->proimage && file_exists(public_path('uploads/' . $uruns->proimage))) {
                unlink(public_path('uploads/' . $uruns->proimage));
            }

            // رفع الصورة الجديدة
            $image = $request->file('proimage');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('uploads'), $imageName);

            // تخزين اسم الصورة الجديدة
            $uruns->proimage = $imageName;
        }

        // حفظ التعديلات
        $uruns->save();

        // إعادة توجيه مع رسالة نجاح
        return redirect()->route('admin.urunlerimiz')->with('success', 'DONE');
    }


    public function destroy($id){
        // جلب المنتج من قاعدة البيانات
        $uruns = Urun::findOrFail($id);

        // التحقق من وجود الصورة وحذفها
        if ($uruns->proimage && file_exists(public_path('uploads/' . $uruns->proimage))) {
            unlink(public_path('uploads/' . $uruns->proimage)); // حذف الصورة من المجلد
        }

        // حذف المنتج من قاعدة البيانات
        $uruns->delete();

        // إعادة التوجيه إلى صفحة المنتجات مع رسالة نجاح
        return redirect()->route('admin.urunlerimiz')->with('success', 'DONE');
    }



    public function singleProduct($id){

        $product = Urun::find($id); 
    
        return view('singleproduct', compact('product'));
        }
    

}