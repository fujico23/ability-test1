<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Contact;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

class AuthController extends Controller
{
    public function index()
    {
        $contacts = Contact::with('category')->get();
        $categories = Category::all();
        $contacts = Contact::orderByDesc('created_at')->paginate(10);
        return view('index', compact('contacts', 'categories',));
    }

    public function search(Request $request)
    {
        $contacts = Contact::with('category')
            ->CategorySearch($request->category_id)
            ->KeywordSearch($request->keyword)
            ->GenderSearch($request->gender)
            ->orderByDesc('created_at')
            ->paginate(10);
    
        $categories = Category::all();
        return view('index', compact('contacts', 'categories'));
    }

}
