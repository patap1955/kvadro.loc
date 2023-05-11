<?php

namespace App\Http\Controllers;

use App\Mail\ContactsForm;
use App\Models\Certificate;
use App\Models\Contact;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PageController extends Controller
{
    public function index (){
        $news = News::all()->sortByDesc('id');
        $certificates = Certificate::all()->sortByDesc("id")->take(3);
        return view("pages.main.index", compact('news', 'certificates'));
    }

    public function formContacts(Request $request)
    {
        $mail = new \stdClass();
        $mail->name = $request->name;
        $mail->phone = $request->phone;

        if (Mail::to('slobodchikov1985@yandex.ru')->send(new ContactsForm($mail))) {
            $validated = $request->validate([
                'name' => 'required|max:50',
                'phone' => 'required',
            ]);
            Contact::create($validated);
            return response()->json($request);
        } else {
            return response()->json(["answer" => "error"]);
        }
    }

    public function politics() {
        return view('pages.politics.index');
    }
}
