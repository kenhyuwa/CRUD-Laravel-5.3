<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BelajarController extends Controller
{
    public function index()
    {
    	$title = 'Ini halaman home';
    	$content = 'Saat ini kita berada di halaman Home onphpid.com';

    	return view('index', compact('title', 'content'));
    }

    public function getPage()
    {
    	$title = 'Ini halaman HTML';
    	$content = 'Saat ini kita berada di halaman HTML onphpid.com';

    	return view('index2', compact('title', 'content'));
    }

    public function getOne()
    {
        $title = 'One To One Relationships ONPHPID.';
        $content = 'Saat ini kita belajar relasi One To One.';
        $users = \App\User::get();

        return view('index', compact('users', 'title', 'content')); // di tutor pake home
    }

    public function hasOne($nama)
    {
        $title = 'One To One Relationships ONPHPID.';
        $content = 'Saat ini kita belajar relasi One To One.';
        $profile = \App\Profile::where('nama', $nama)->first();

        return view('index2', compact('title', 'content', 'profile'));
    }

    public function getOneMany()
    {
        $title = 'One To Many and Many To One Relationships ONPHPID.';
        $content = 'Saat ini kita belajar relasi One To Many and Many To One.';
        $users = \App\User::all();

        return view('one_to_many', compact('users', 'title', 'content')); // di tutor pake home
    }

    public function getmanyOne()
    {
        $title = 'One To Many and Many To One Relationships ONPHPID.';
        $content = 'Saat ini kita belajar relasi One To Many and Many To One.';
        $kendaraans = \App\Kendaraan::get();

        return view('many_to_one', compact('kendaraans', 'title', 'content')); // di tutor pake home
    }

    public function getManyToMany($name = 'onphpid')
    {
        $title = 'Many To Many Relationships ONPHPID.';
        $content = 'Saat ini kita belajar relasi Many To Many.';
        $users = \App\User::where('name', $name)->first();

        return view('many_to_many', compact('users', 'title', 'content', 'name'));
    }

    public function hasManyThrough($id = 1)
    {
        $title = 'Has Many Through Relationships ONPHPID.';
        $content = 'Saat ini kita belajar relasi Has Many Through.';
        $kota = \App\Kota::find($id);

        return view('has_many_through', compact('kota', 'title', 'content'));
    }

}
