<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\Vak;
use Illuminate\Http\Request;

class searchController extends Controller
{

    public function search(Request $request)
    {
        // Get the search term from the request
        $searchTerm = $request->input('searchterm');

        // Get the selected checkboxes' values
        $types = $request->input('types', []);
        $courses = $request->input('courses', []);

        // Query the posts table based on the search term and selected checkboxes
        $query = Post::query();

        if (!empty($searchTerm)) {
            $query->where('title', 'LIKE', "%$searchTerm%");
        }

        if (!empty($types)) {
            $query->whereIn('type', $types);
        }

        if (!empty($courses)) {
            $query->whereIn('course', $courses);
        }
        // dd($query);
        $posts = $query->get();
        $courses = Vak::all();
        return view('search', compact('posts', 'courses', 'searchTerm'));
    }

}
