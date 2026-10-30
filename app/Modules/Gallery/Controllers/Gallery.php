<?php

namespace Modules\Gallery\Controllers;

use App\Controllers\BaseController;
use Modules\Template\Controllers\Template;

class Gallery extends BaseController
{
    public function photo_gallery(): string
    {
        $db = \Config\Database::connect();
        $photos = $db->table('gallery')
            ->where('status', 1)
            ->orderBy('auto_id', 'DESC')
            ->get()
            ->getResult();

        $company = $this->comp['company3'] ?? '';
        $data['title']       = "Photo Gallery | " . $company;
        $data['description'] = "Explore visual highlights of our cargo handling, warehouse storage, specialized container fleets, and relocation operations at " . $company . ".";
        $data['page']        = 'photo-gallery';
        $data['module']      = 'gallery';
        $data['photos']      = $photos;
        $data['view_file']   = 'Modules\Gallery\Views\photo_gallery';

        return Template::layout2($data);
    }

    public function video_gallery(): string
    {
        $db = \Config\Database::connect();
        $videos = $db->table('video_gallery')
            ->where('status', 1)
            ->orderBy('auto_id', 'DESC')
            ->get()
            ->getResult();

        $company = $this->comp['company3'] ?? '';
        $data['title']       = "Video Gallery | " . $company;
        $data['description'] = "Watch our step-by-step cargo handling processes, transport safety standards, and relocation operations in action at " . $company . ".";
        $data['page']        = 'video-gallery';
        $data['module']      = 'gallery';
        $data['videos']      = $videos;
        $data['view_file']   = 'Modules\Gallery\Views\video_gallery';

        return Template::layout2($data);
    }
}
