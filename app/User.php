<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Notifications\MailResetPasswordToken;
use Auth;
use Session;
use Hash;
use Validator;
use Redirect;
use Image;


class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function profileUpdate()
    {
        $inp = request()->all();
        $user = Auth::user();
        $validator = Validator::make($inp, [ // <---
            'isim' =>   'required|max:100',
            'eposta' =>   'required|max:100',
            'eskiParola' =>   'required|max:100',
            'yeniParola' =>   'required|max:100|different:eskiParola',
            //'avatar' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        if(!password_verify($inp['eskiParola'], $user->password)){
            Session::flash('danger', 'Eski Parola Hatalı');
            return Redirect::back()->withErrors($validator)->withInput();
        }else{
            if($validator->fails()){
                return Redirect::back()->withErrors($validator)->withInput();
            }else{
                $hashed = \Hash::make($inp['yeniParola']);
                $user->name = $inp['isim'];
                $user->email = $inp['eposta'];
                $user->password = $hashed;
                $user->save();
                Session::flash('success', 'Profil başarılı bir şekilde güncellendi');
                return Redirect::back()->withErrors($validator)->withInput();
            }
        }
    }

    public function avatarUpdate()
    {
        $inp = request()->all();
        $user = Auth::user();
        $validator = Validator::make($inp, [ // <---
            //'avatar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        if($validator->fails()){
            return Redirect::back()->withErrors($validator)->withInput();
        }else{
            if(isset($inp['avatar'])){
                $image       = request()->file('avatar');
                $filename    = $user->id.'_avatar'.time().$image->getClientOriginalName();
                $image_resize = Image::make($image->getRealPath());              
                $image_resize->fit(256);
                $image_resize->save('storage/avatars/'.$filename,90);
                $user->avatar = $filename;
            } else{
                $user->avatar = $user->avatar;
            }
            $user->save();
            Session::flash('success', 'Avatar başarılı bir şekilde güncellendi'); 
            return Redirect::back()->withErrors($validator)->withInput();
        }
    }

    public function sendPasswordResetNotification($token)
    {
        $this->notify(new MailResetPasswordToken($token));
    }
}
