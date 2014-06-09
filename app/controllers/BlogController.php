<?php
/*
 * BlogController.php by jamie (28/01/14 @ 21:58)
 */

class BlogController extends BaseController {

    public function adminIndex()
    {
        // Show a list of blog posts for the admin user
        $blogs = Blog::orderBy('id','desc')->get();
        return View::make('admin.blog', compact('blogs'));
    }
    public function publicIndex()
    {
        // Show a list of blog posts for the public user
        $blogs = Blog::orderBy('id','desc')->get();
        return View::make('blog', compact('blogs'));
    }
    public function display(Blog $blog)
    {
        return View::make('blog-full', compact('blog'));
    }
    public function create()
    {
        return View::make('admin.blog.create');
    }
    public function handleCreate()
    {
        // Handle the creation of a blog post
        $blog = new Blog;
        $blog->title                = Input::get('title');
        $blog->slug                 = Input::get('slug');
        $blog->content              = Input::get('content');
        $blog->available            = Input::has('available');
        $blog->allow_comments       = Input::has('allow_comments');
        $blog->save();

        return Redirect::action('BlogController@adminIndex');
    }
    public function edit(Blog $blog)
    {
        return View::make('admin.blog.edit', compact('blog'));
    }
    public function handleEdit()
    {
        // Handle edit form submission
        $blog                       = Blog::findOrFail(Input::get('id'));
        $blog->title                = Input::get('title');
        $blog->slug                 = Input::get('slug');
        $blog->content              = Input::get('content');
        $blog->available            = Input::has('available');
        $blog->allow_comments       = Input::has('allow_comments');
        $blog->save();

        return Redirect::action('BlogController@adminIndex');
    }
    public function delete(Blog $blog)
    {
        return View::make('admin.blog.delete', compact('blog'));
    }
    public function handleDelete()
    {
        // Handle the deletion of a blog post
        $id                         = Input::get('blog');
        $blog                       = Blog::findOrFail($id);
        $blog->delete();

        return Redirect::action('BlogController@adminIndex');
    }

} 