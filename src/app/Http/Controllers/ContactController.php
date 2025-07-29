<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function confirm(Request $request)
    {
        // リクエストから必要なフィールド（name, email, tel, content）だけを取り出し、$contact に連想配列として格納
        $contact = $request->only(['name', 'email', 'tel', 'content']);

        // ① この return 文で「confirm.blade.php」ビューを表示し、'contact' というキーで変数 $contact を渡す
        return view('confirm', ['contact' => $contact]);

        // ② （到達しない）この行は実行されない：return 文はそこで処理が終了するため、この行は無意味となる
        return view('confirm', compact('contact'));
    }

    public function store()
    {
        // ここに処理を記述していきます。
    }
}
