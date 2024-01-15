<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Category;
use App\Http\Requests\ContactRequest;
use Illuminate\Support\Str;

class ContactController extends Controller
{
    public function index()
    {
      $categories = Category::all();
      return view('contact', compact('categories'));
    }

    public function confirm(ContactRequest $request)
    {
      $contact = $request->only(['first_name', 'last_name', 'gender', 'email', 'tell','address', 'building', 'category_id','detail']);
      $categories = Category::all();
      $category = $categories->where('id', $contact['category_id'])->first();

      $string = Str::of($contact['first_name'])->append("  ")->append($contact['last_name']);
      $genderMap = [
        1 => '男性',
        2 => '女性',
        3 => 'その他'
      ];
      $gender = $request->input('gender');
      return view('confirm', ['contact' => $contact, 'category' => $category, 'string' => $string, 'gender' => $genderMap[$gender]]);

    }

    public function store(Request $request)
    {
      $categories = Category::all();
      $contact = $request->only(['first_name', 'last_name', 'gender', 'email', 'tell','address', 'building','category_id', 'detail']);
      Contact::create($contact,$categories);
      return view('thanks');
    }

  }
