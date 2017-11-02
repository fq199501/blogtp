<?php
namespace app\home\controller;

class Index
{
    public function index()
    {
        return view('index');
    }

    public function about()
    {
        return view('about');
    }

    public function learn()
    {
        return view('learn');
    }

    public function news()
    {
        return view('news');
    }

    public function riji()
    {
        return view('riji');
    }

    public function shuo()
    {
        return view('shuo');
    }

    public function xc()
    {
        return view('xc');
    }

    public function guestbook()
    {
        return view('guestbook');
    }
}
