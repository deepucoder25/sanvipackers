<?php

namespace Modules\Blog\Controllers;

use App\Controllers\BaseController;
use Modules\Template\Controllers\Template;

class Blog extends BaseController
{
    private function slugify(string $text): string
    {
        $text = strtolower($text);
        $text = preg_replace('~[^a-z0-9\s-]~', '', $text);
        $text = preg_replace('~[\s-]+~', '-', $text);
        return trim($text, '-');
    }

    public function index()
    {
        return redirect()->to(site_url('blog/view'));
    }

    public function view(int $offset = 0): string
    {
        $db = \Config\Database::connect();
        $builder = $db->table('blog');

        $total = $builder->countAllResults(false);
        $perPage = 6;

        $blogs = $builder->orderBy('b_id', 'DESC')
            ->limit($perPage, $offset)
            ->get()
            ->getResult();

        $recentPosts = $db->table('blog')
            ->orderBy('b_id', 'DESC')
            ->limit(5)
            ->get()
            ->getResult();

        $company = $this->comp['company3'] ?? '';
        $data['title']        = "Official Blog & Moving Guides | " . $company;
        $data['description']  = "Latest moving tips, relocation guides, packing advice, and logistics updates from " . $company . ".";
        $data['page']         = 'blog';
        $data['module']       = 'blog';
        $data['blogs']        = $blogs;
        $data['total']        = $total;
        $data['recent_posts'] = $recentPosts;
        $data['per_page']     = $perPage;
        $data['offset']       = $offset;
        $data['view_file']    = 'Modules\Blog\Views\blog';

        return Template::layout2($data);
    }

    public function read(string $slug = ''): string
    {
        $slug = trim($slug);
        if ($slug === '') {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        $db = \Config\Database::connect();
        $searchSlug = str_replace('_', '-', $slug);

        $blog = $db->table('blog')
            ->groupStart()
                ->where('slug', $searchSlug)
                ->orWhere('b_id', (int) $searchSlug)
            ->groupEnd()
            ->get()
            ->getRow();

        if (!$blog) {
            // Try title match
            $all = $db->table('blog')->get()->getResult();
            foreach ($all as $b) {
                if ($this->slugify($b->title) === strtolower($searchSlug)) {
                    $blog = $b;
                    break;
                }
            }
        }

        if (!$blog) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        // Increment view count
        $db->table('blog')
            ->where('b_id', $blog->b_id)
            ->set('views', 'views + 1', false)
            ->update();

        $recentPosts = $db->table('blog')
            ->where('b_id !=', $blog->b_id)
            ->orderBy('b_id', 'DESC')
            ->limit(5)
            ->get()
            ->getResult();

        $company = $this->comp['company3'] ?? '';
        $data['title']        = ($blog->meta_title ?: $blog->title) . " | " . $company;
        $data['description']  = $blog->meta_desc ?: substr(strip_tags($blog->description), 0, 160);
        $data['page']         = 'blog-details';
        $data['module']       = 'blog';
        $data['query']        = [$blog];
        $data['recent_posts'] = $recentPosts;
        $data['view_file']    = 'Modules\Blog\Views\view';

        return Template::layout2($data);
    }
}
