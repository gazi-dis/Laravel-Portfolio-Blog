<?php

namespace App\Http\Controllers;

use App\Content;
use App\Setting;
use App\User;
use Auth;
use Cache;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Redirect;
use Session;
use Validator;
use App\Post;
use App\Category;
use App\Mail\SendMail;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.dashboard')
                ->with('posts_count', Post::all()->count())
                ->with('trashed_count', Post::onlyTrashed()->get()->count())
                ->with('users_count', User::all()->count())
                ->with('categories_count', Category::all()->count());
    }

    public function loginIndex()
    {
        if (Auth::check()) {
            return redirect('admin/dashboard');
        } else {
            return view('admin.signin');
        }
    }

    public function registerIndex()
    {
        return view('admin.signup');
    }

    public function settingsIndex()
    {
        return view('admin.settings', );
    }

    public function profileIndex()
    {
        $user = Auth::user();
        return view('admin.profile', compact('user'));
    }

    public function aboutSettings()
    {
        return view('admin.about');
    }

    public function servicesSettings()
    {
        $contents = Cache::get('bilgiler', function () {
            return Content::where('slug', 'services-content')->get();
        });
        return view('admin.services', compact('contents'));
    }

    public function projectsSettings()
    {
        $contents = Cache::get('bilgiler', function () {
            return Content::where('slug', 'projects-content')->get();
        });
        return view('admin.projects', compact('contents'));
    }

    public function hireSettings()
    {
        return view('admin.hire');
    }

    public function contactSettings()
    {
        return view('admin.contact');
    }

    public function footerSettings()
    {
        return view('admin.footer-setting');
    }

    public function settingUpdate()
    {
        $model = (new \App\Setting());
        return $model->settingUpdate(request()->all());
    }

    public function profileUpdate()
    {
        $model = new \App\User();
        return $model->profileUpdate(request()->all());
    }

    public function avatarUpdate()
    {
        $model = new \App\User();
        return $model->avatarUpdate(request()->all());
    }

    public function aboutUpdate()
    {
        $model = new \App\Setting();
        return $model->aboutUpdate(request()->all());
    }

    public function serviceUpdate($id)
    {
        $inputs = request()->all();
        $model = new \App\Content();
        return $model->serviceUpdate($inputs, $id);
    }

    public function projectUpdate($id)
    {
        $inputs = request()->all();
        $model = new \App\Content();
        return $model->projectUpdate($inputs, $id);
    }

    public function infoUpdate()
    {
        $model = new \App\Setting();
        return $model->infoUpdate(request()->all());
    }

    public function addService()
    {
        $model = new \App\Content();
        return $model->addService(request()->all());
    }

    public function addProject()
    {
        $model = new \App\Content();
        return $model->addProject(request()->all());
    }

    public function deleteService($id)
    {
        if (is_null($id)) {
            Session::flash('danger', 'Hizmet silinemedi');
            return Redirect::back();
        } else {
            DB::table('contents')->where('id', $id)->delete();
            Cache::flush();
            Session::flash('success', 'Hizmet başarılı bir şekilde silindi');
            return Redirect::back();
        }
    }

    public function deleteProject($id)
    {
        if (is_null($id)) {
            Session::flash('danger', 'Proje silinemedi');
            return Redirect::back();
        } else {
            DB::table('contents')->where('id', $id)->delete();
            Cache::flush();
            Session::flash('success', 'Proje başarılı bir şekilde silindi');
            return Redirect::back();
        }
    }

    public function mailsend()
    {
        $inp = request()->all();
        $validator = Validator::make($inp, [ // <---
            'isim' =>   'required|max:200',
            'mail' =>   'required|max:100',
            'konu' =>   'required|max:500',
            'icerik' =>   'required|max:2000',
        ]);
        if($validator->fails()){
            Session::flash('danger', 'Lütfen boş alan bırakmayın');
            return Redirect::back()->withErrors($validator)->withInput();
        }else{
            $details = [
                'title' => 'Gönderen: '.$inp['isim'],
                'mail' => 'Mail Adresi: '.$inp['mail'],
                'subject' => 'Konu: '.$inp['konu'],
                'body' => 'Mesaj: '.$inp['icerik'],
            ];
            \Mail::to('apogalli@gmail.com')->send(new SendMail($details));
            Session::flash('success', 'Mesajınız başarılı bir şekilde gönderildi');
            return Redirect::back()->withErrors($validator)->withInput();
        }
    }

    

}
