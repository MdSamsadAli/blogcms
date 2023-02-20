<?php

    namespace App\Services;

    use App\Models\Slider;
    use Illuminate\Http\Request;
    use App\Http\Requests\SliderFormRequest;
    use Illuminate\Support\Facades\File;

    class SliderService {

        public function all()
        {
            $sliders = Slider::all();
            return view('admin.slider.index', compact('sliders'));
        }
        
        public function createSlider(SliderFormRequest $request)
        {
            $validatedData = $request->validated();

            if($request->hasFile('image')){
                $file = $request->file('image');
                $ext = $file->getClientOriginalExtension();
                $filename = time() .'.'.$ext;
                $file->move('uploads/slider/', $filename);
                $validatedData['image'] = "uploads/slider/$filename";
            }

            $validatedData['status'] = $request->status == true ? '1' : '0';

            Slider::create([
                'title'=>$validatedData['title'],
                'descripition'=>$validatedData['description'],
                'image'=>$validatedData['image'],
                'status'=>$validatedData['status'],
            ]);
            return redirect()->route('slider.index');
        }

        public function get($id)
        {
            $slider = Slider::find($id);
            return view('admin.slider.edit', compact('slider'));
        }

        public function updateSlider(SliderFormRequest $request, $id)
        {
            $slider = Slider::find($id);
            $validatedData = $request->validated();

            
            if($request->hasFile('image')){

                $destination = $slider->image;

            if(File::exists($destination)){
                File::delete($destination);
            }


                $file = $request->file('image');
                $ext = $file->getClientOriginalExtension();
                $filename = time() .'.'.$ext;
                $file->move('uploads/slider/', $filename);
                $validatedData['image'] = "uploads/slider/$filename";
            }

            $validatedData['status'] = $request->status == true ? '1' : '0';

            Slider::where('id', $slider->id)->update([
                'title'=>$validatedData['title'],
                'descripition'=>$validatedData['description'],
                'image'=>$validatedData['image'] ?? $slider->image,
                'status'=>$validatedData['status'],
            ]);

            return redirect()->route('slider.index');
        }

        public function delete($id)
        {
            $slider = Slider::find($id);

            $destination = $slider->image;
            if(File::exists($destination)){
                File::delete($destination);
            }

            $slider->delete();
            return redirect()->route('slider.index');
        }
    }

?>