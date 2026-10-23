<?php

namespace App\Controllers;

class About extends BaseController
{
    public function index(): string
    {
        $meta_title = 'About Moople Institute | Animation & Design Institute Since 2000';
        $meta_keyword = '';
        $meta_description = 'Moople Institute has trained 15,000+ students since 2000 in animation, VFX, design, web and digital marketing across 19+ centres in West Bengal and Assam.';
  

        $data['meta_title'] = $meta_title;
        $data['meta_keyword'] = $meta_keyword;
        $data['meta_description'] = $meta_description;
        $data['page_uri'] = service('uri')->getSegment(1);
        
        return view('about',$data);
    }
}
