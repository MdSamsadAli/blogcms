<?php

    namespace App\Services;

    use App\Models\Blog;
    use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Http\Requests\BlogFormRequest;

    class BlogService{

        public function all()
        {
            $blogs = Blog::all();
            return view('admin.blog.index', compact('blogs'));
        }

        public function createBlog($request)
        {
            $validatedData = $request->validated();

            if($request->hasFile('image')){
                $file = $request->file('image');
                $ext = $file->getClientOriginalExtension();
                $filename = time() .'.'.$ext;
                $file->move('uploads/blog/', $filename);
                $validatedData['image'] = "uploads/blog/$filename";
            }


            Blog::create([
                'title'=>$validatedData['title'],
                'description'=>$validatedData['description'],
                'image'=>$validatedData['image'],
            ]);

            return redirect()->route('blog.index');
        }

        public function get($id)
        {
            $blogs = Blog::find($id);
            return view('admin.blog.edit', compact('blogs'));
        }
        public function updateBlog(BlogFormRequest $request, $id)
        {
            $blog = Blog::find($id);
            $validatedData = $request->validated();

            if($request->hasFile('image')){

                $destination = $blog->image;
                if(File::exists($destination)){
                    File::delete($destination);
                }

                $file = $request->file('image');
                $ext = $file->getClientOriginalExtension();
                $filename = time() .'.'.$ext;
                $file->move('uploads/blog/', $filename);
                $validatedData['image'] = "uploads/blog/$filename";
            }


            Blog::where('id', $blog->id)->update([
                'title'=>$validatedData['title'],
                'description'=>$validatedData['description'],
                'image'=>$validatedData['image'] ?? $blog->image,
            ]);

            return redirect()->route('blog.index');
        }
        public function delete($id)
        {
            $blog = Blog::find($id);

            $destination = $blog->image;
            if(File::exists($destination)){
                File::delete($destination);
            }

            $blog->delete();
            return redirect()->route('blog.index');
        }
    }
?>