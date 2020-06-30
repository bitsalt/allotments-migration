<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        return view('index.index')
            ->with(['years' => [
                [2006 => '2006-2007'],
                [2007 => '2007-2008'],
                [2008 => '2008-2009'],
                [2009 => '2009-2010'],
                [2010 => '2010-2011'],
                [2011 => '2011-2012'],
                [2012 => '2012-2013'],
        ]]);
    }
}
