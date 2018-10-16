<?php

namespace Theme\Bytesoft\Http\Controllers;

use Illuminate\Routing\Controller;
use Theme;

class BytesoftController extends Controller
{

//     /**
//      * @return \Response
//      */
//     public function test()
//     {
//         return Theme::scope('test')->render();
//     }
// }
	/**
	*
	* @ Contact From
	*
	*/


	public function getContact(){
		page_title()->setTitle(trans('plugins.gallery::gallery.list'));
		return Theme::scope('contact')->render();
	}