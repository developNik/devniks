<?php

namespace Devniks\BlogCurd;

use Devniks\BlogCurd\Models\Blog as BlogModel;

class Blog {

    public function addBlog($title, $content) {
        return BlogModel::create([
            'title' => $title,
            'content' => $content
        ]);
    }

    public function getBlogs($withTrashed = false) {
        return $withTrashed ? BlogModel::withTrashed()->get() : BlogModel::all();
    }

    public function getBlogsPaginated($perPage = 10, $withTrashed = false) {
        return $withTrashed ? BlogModel::withTrashed()->paginate($perPage) : BlogModel::paginate($perPage);
    }

    public function getBlogById($id, $withTrashed = false) {
        return $withTrashed ? BlogModel::withTrashed()->find($id) : BlogModel::find($id);
    }

    public function updateBlog($id, $title, $content) {
        $blog = BlogModel::find($id);
        if ($blog) {
            $blog->update([
                'title' => $title,
                'content' => $content
            ]);
            return true;
        }
        return false;
    }

    public function deleteBlog($id) {
        $blog = BlogModel::find($id);
        if ($blog) {
            return $blog->delete();
        }
        return false;
    }

    public function restoreBlog($id) {
        $blog = BlogModel::withTrashed()->find($id);
        if ($blog) {
            return $blog->restore();
        }
        return false;
    }

    public function forceDeleteBlog($id) {
        $blog = BlogModel::withTrashed()->find($id);
        if ($blog) {
            return $blog->forceDelete();
        }
        return false;
    }
}
