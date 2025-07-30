<?php

// このファイルは App\Models 名前空間に属します。
// コントローラーなどからは use App\Models\Contact; として使われます。
namespace App\Models;

// Laravel が提供する Eloquent モデルの基本機能を継承するために読み込みます。
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// Contact モデルの定義（Eloquent モデル）
// このクラスは通常、 contacts テーブルと紐づきます（Laravelの命名規則に従って自動で対応）
class Contact extends Model
{
    // HasFactory トレイトを使うことで、ファクトリ機能（テスト用ダミーデータ生成など）を使えるようにします。
    use HasFactory;

    // ホワイトリストとして「一括代入（mass assignment）」が許可されるカラムを定義します。
    // これらの項目だけが create() や update() でまとめて登録できるようになります。
    protected $fillable = [
        'name',    // 名前（必須フィールド）
        'email',   // メールアドレス
        'tel',     // 電話番号
        'content'  // お問い合わせ内容
    ];
}
