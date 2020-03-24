<?php

namespace App;

use App\Http\Controllers\Redirect;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Image;
use Session;
use \Cache;

class Setting extends Model
{
    protected $table = "settings";
    public $primaryKey = "id";
    public $timestamps = false;

    protected $fillable = [
        "option",
        "slug",
        "value",
    ];

    public function settingUpdate()
    {
        $entry = 0;
        $about = 0;
        $services = 0;
        $projects = 0;
        $hire = 0;
        $contact = 0;
        $blog = 0;
        $bool_comment = 0;
        $blog_author = 0;
        $cv_bool = 0;
        $admin_link = 0;
        $inp = request()->all();
        if (isset($inp['entry'])) {
            $entry = 1;
        }
        if (isset($inp['about'])) {
            $about = 1;
        }
        if (isset($inp['services'])) {
            $services = 1;
        }
        if (isset($inp['projects'])) {
            $projects = 1;
        }
        if (isset($inp['hire'])) {
            $hire = 1;
        }
        if (isset($inp['contact'])) {
            $contact = 1;
        }
        if (isset($inp['blog'])) {
            $blog = 1;
        }
        if (isset($inp['bool-comment'])) {
            $bool_comment = 1;
        }
        if (isset($inp['blog-author'])) {
            $blog_author = 1;
        }
        if (isset($inp['cv-bool'])) {
            $cv_bool = 1;
        }
        if (isset($inp['admin-link'])) {
            $admin_link = 1;
        }
        $settings = array(
            [
                'name' => 'entry',
                'value' => $entry,
            ],
            [
                'name' => 'about',
                'value' => $about,
            ],
            [
                'name' => 'services',
                'value' => $services,
            ],
            [
                'name' => 'projects',
                'value' => $projects,
            ],
            [
                'name' => 'hire',
                'value' => $hire,
            ],
            [
                'name' => 'contact',
                'value' => $contact,
            ],
            [
                'name' => 'blog',
                'value' => $blog,
            ],
            [
                'name' => 'bool-comment',
                'value' => $bool_comment,
            ],
            [
                'name' => 'blog-author',
                'value' => $blog_author,
            ],
            [
                'name' => 'cv-bool',
                'value' => $cv_bool,
            ],
            [
                'name' => 'admin-link',
                'value' => $admin_link,
            ],
        );
        foreach ($settings as $setting) {
            DB::table('settings')
                ->where('slug', $setting['name'])
                ->update(['value' => $setting['value']]);
        }
        \Cache::forget('settings');
        Session::flash('success', 'Ayarlar başarılı bir şekilde güncellendi.');
        return redirect()->back();
    }

    public function aboutUpdate()
    {
        $inp = request()->all();
        if (isset($inp['resim'])) {
            $image = request()->file('resim');
            $filename = 'about_2_' . $image->getClientOriginalName();
            $image_resize = Image::make($image->getRealPath());
            $image_resize->save('storage/images/about/' . $filename, 100);
        } else {
            $filename = config('settings.bio-image');
        }
        $settings = array(
            [
                'name' => 'name',
                'value' => $inp['isim'],
            ],
            [
                'name' => 'surname',
                'value' => $inp['soyisim'],
            ],
            [
                'name' => 'email',
                'value' => $inp['eposta'],
            ],
            [
                'name' => 'phone',
                'value' => $inp['telefon'],
            ],
            [
                'name' => 'birthday',
                'value' => $inp['dogum'],
            ],
            [
                'name' => 'adress',
                'value' => $inp['adres'],
            ],
            [
                'name' => 'total-projects',
                'value' => $inp['proje'],
            ],
            [
                'name' => 'bio-info',
                'value' => $inp['aciklama'],
            ],
            [
                'name' => 'bio-image',
                'value' => $filename,
            ],
        );
        foreach ($settings as $setting) {
            DB::table('settings')
                ->where('slug', $setting['name'])
                ->update(['value' => $setting['value']]);
        }
        \Cache::forget('settings');
        Session::flash('success', 'Hakkımda bilgileri başarılı bir şekilde güncellendi.');
        return redirect()->back();
    }

    public function infoUpdate()
    {
        $inp = request()->all();
        if (isset($inp['favicon'])) {
            $image = request()->file('favicon');
            $filename_favicon = 'favicon' . \File::extension($image);
            $image_r = Image::make($image->getRealPath());
            $image_r->save(public_path('src/') . $filename_favicon, 100);
        } else {
            $filename_favicon = config('settings.favicon');
        }
        if (isset($inp['cv-document'])) {
            $file = request()->file('cv-document');
            $filename_cv = 'cv-' . $file->getClientOriginalName();
            request()->file('cv-document')->storeAs(
                'documents', $filename_cv
            );
        } else {
            $filename_cv = config('settings.cv-document');
        }
        $settings = array(
            [
                'name' => 'title',
                'value' => $inp['title'],
            ],
            [
                'name' => 'hobby-1',
                'value' => $inp['hobby-1'],
            ],
            [
                'name' => 'hobby-2',
                'value' => $inp['hobby-2'],
            ],
            [
                'name' => 'hobby-3',
                'value' => $inp['hobby-3'],
            ],
            [
                'name' => 'hire-link',
                'value' => $inp['hire-link'],
            ],
            [
                'name' => 'personal-link',
                'value' => $inp['personal-link'],
            ],
            [
                'name' => 'face-link',
                'value' => $inp['face-link'],
            ],
            [
                'name' => 'ig-link',
                'value' => $inp['ig-link'],
            ],
            [
                'name' => 'twitter-link',
                'value' => $inp['twitter-link'],
            ],
            [
                'name' => 'hire-info',
                'value' => $inp['hire-info'],
            ],
            [
                'name' => 'services-info',
                'value' => $inp['services-info'],
            ],
            [
                'name' => 'projects-info',
                'value' => $inp['projects-info'],
            ],
            [
                'name' => 'blog-info',
                'value' => $inp['blog-info'],
            ],
            [
                'name' => 'contact-info',
                'value' => $inp['contact-info'],
            ],
            [
                'name' => 'footer-info',
                'value' => $inp['footer-info'],
            ],
            [
                'name' => 'admin-mail',
                'value' => $inp['admin-mail'],
            ],
            [
                'name' => 'comment-script',
                'value' => $inp['comment-script'],
            ],
            [
                'name' => 'dashboard-title',
                'value' => $inp['dashboard-title'],
            ],
            [
                'name' => 'cv-document',
                'value' => $filename_cv,
            ],
            [
                'name' => 'favicon',
                'value' => $filename_favicon,
            ],
        );
        foreach ($settings as $setting) {
            DB::table('settings')
                ->where('slug', $setting['name'])
                ->update(['value' => $setting['value']]);
        }
        \Cache::forget('settings');
        Session::flash('success', 'Site ayarları başarılı bir şekilde güncellendi.');
        return redirect()->back();
    }

}
