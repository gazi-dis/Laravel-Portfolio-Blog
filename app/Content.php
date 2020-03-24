<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\Cache\Factory;
use \Cache;
use Validator;
use Session;
use Redirect;
use Image;

class Content extends Model
{
    protected $table = "contents";
    public $primaryKey = "id";
    public $timestamps = false;

    protected $fillable = [
        "slug",
        "title",
        "content",
        "media"
    ];

    public function addService()
    {
        $inp = request()->all();
        $validator = Validator::make($inp, [ // <---
            'baslik' =>   'required|max:200',
            'aciklama' =>   'required|max:500',
            'ikon' =>   'required|max:100',
        ]);
        if($validator->fails()){
            return Redirect::back()->withErrors($validator)->withInput();
        }else{
            DB::table('contents')->insert(
                ['slug' => 'services-content', 'title' => $inp['baslik'], 'content' => $inp['aciklama'], 'media' => $inp['ikon']]
            );
            Cache::flush();
            Session::flash('success', 'Hizmet başarılı bir şekilde eklendi'); 
            return Redirect::back()->withErrors($validator)->withInput();
        }
    }

    public function serviceUpdate($inp,$id)
    {
        $validator = Validator::make($inp, [ // <---
            'baslik' =>   'required|max:200',
            'aciklama' =>   'required|max:500',
            'ikon' =>   'required|max:100',
        ]);
        if($validator->fails()){
            return Redirect::back()->withErrors($validator)->withInput();
        }else{
            DB::table('contents')
            ->where('id', $id)
            ->update(['title' => $inp['baslik'],'content' => $inp['aciklama'], 'media' => $inp['ikon']]);
            Cache::flush();
            Session::flash('success', 'Hizmet başarılı bir şekilde güncellendi'); 
            return Redirect::back()->withErrors($validator)->withInput();
        }
    }

    public function addProject()
    {
        $inp = request()->all();
        $validator = Validator::make($inp, [ // <---
            'baslik' =>   'required|max:200',
            'aciklama' =>   'required|max:500',
            'resim' =>  'required'
        ]);
        if($validator->fails()){
            return Redirect::back()->withErrors($validator)->withInput();
        }else{
            $project = new Content;
            $project->slug = 'projects-content';
            if(isset($inp['resim'])){
                $image       = request()->file('resim');
                $filename    = 'project_'.time().$image->getClientOriginalName();
                $image_r = Image::make($image->getRealPath());              
                $image_r->save('storage/images/projects/'.$filename,100);
                $project->media = $filename;
            } else{
                $project->media = 'work-2.jpg';
            }
            $project->title = $inp['baslik'];
            $project->content = $inp['aciklama'];
            $project->save();
            Cache::flush();
            Session::flash('success', 'Proje başarılı bir şekilde eklendi'); 
            return Redirect::back()->withErrors($validator)->withInput();
        }
    }

    public function projectUpdate($inp,$id)
    {
        $validator = Validator::make($inp, [ // <---
            'baslik' =>   'required|max:200',
            'aciklama' =>   'required|max:500',
        ]);
        if($validator->fails()){
            return Redirect::back()->withErrors($validator)->withInput();
        }else{
            $project = Content::find($id);
            $project->slug = 'projects-content';
            if(isset($inp['resim'])){
                $image       = request()->file('resim');
                $filename    = 'project_'.time().$image->getClientOriginalName();
                $image_r = Image::make($image->getRealPath());              
                $image_r->save('storage/images/projects/'.$filename,100);
                $project->media = $filename;
            } else{
                $project->media = $project->media;
            }
            $project->title = $inp['baslik'];
            $project->content = $inp['aciklama'];
            $project->save();
            Cache::flush();
            Session::flash('success', 'Proje başarılı bir şekilde güncellendi'); 
            return Redirect::back()->withErrors($validator)->withInput();
        }
    }


}