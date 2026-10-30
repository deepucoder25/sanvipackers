<?php

namespace Modules\Reviews\Controllers;

use App\Controllers\BaseController;
use Modules\Template\Controllers\Template;
use Modules\Reviews\Models\Reviews_mdl;

class Reviews extends BaseController
{
    public function index(): string
    {
        $starFilter = $this->request->getGet('star');
        $offset = (int) ($this->request->getGet('per_page') ?? 0);
        $perPage = 9;

        $reviewsMdl = new Reviews_mdl();
        $totalRows = $reviewsMdl->count_reviews($starFilter);
        $reviews = $reviewsMdl->get_reviews($perPage, $offset, $starFilter);

        $company = $this->comp['company3'] ?? '';
        $data['title']       = "Customer Reviews & Ratings | " . $company;
        $data['description'] = "Detailed feedback and ratings from our satisfied clients. Read genuine reviews about our moving services at " . $company . ".";
        $data['page']        = 'reviews';
        $data['module']      = 'reviews';
        $data['reviews']     = $reviews;
        $data['total_rows']  = $totalRows;
        $data['per_page']    = $perPage;
        $data['offset']      = $offset;
        $data['star_filter'] = $starFilter;
        $data['view_file']   = 'Modules\Reviews\Views\reviews';

        return Template::layout2($data);
    }

    public function submit()
    {
        if ($this->request->getMethod() === 'POST' || $this->request->getMethod() === 'post') {
            $name    = trim($this->request->getPost('name') ?? '');
            $email   = trim($this->request->getPost('email') ?? '');
            $city    = trim($this->request->getPost('city') ?? ($this->request->getPost('title') ?? ''));
            $desc    = trim($this->request->getPost('review') ?? ($this->request->getPost('desc') ?? ''));
            $stars   = (int) ($this->request->getPost('rating') ?? ($this->request->getPost('stars') ?? 5));
            if ($stars < 1 || $stars > 5) $stars = 5;

            $isAjax = $this->request->isAJAX() 
                || $this->request->getPost('ajax') == '1' 
                || $this->request->getHeaderLine('X-Requested-With') === 'XMLHttpRequest';

            if (empty($name) || empty($email) || empty($desc)) {
                $err = 'Name, email, and review experience are required.';
                if ($isAjax) {
                    return $this->response->setJSON(['status' => 'error', 'message' => $err]);
                }
                session()->setFlashdata('error', $err);
                return redirect()->to(site_url('reviews'));
            }

            $db = \Config\Database::connect();
            $existing = $db->table('reviews')->where('email', $email)->countAllResults();
            if ($existing > 0) {
                $err = 'You have already submitted a review with this email address.';
                if ($isAjax) {
                    return $this->response->setJSON(['status' => 'error', 'message' => $err]);
                }
                session()->setFlashdata('error', $err);
                return redirect()->to(site_url('reviews'));
            }

            // Handle optional image uploads
            $uploadedImages = [];
            $files = $this->request->getFiles();
            if (!empty($files['review_images'])) {
                $uploadPath = FCPATH . 'assets/images/reviews/';
                if (!is_dir($uploadPath)) {
                    mkdir($uploadPath, 0777, true);
                }

                $images = is_array($files['review_images']) ? $files['review_images'] : [$files['review_images']];
                foreach ($images as $img) {
                    if ($img && $img->isValid() && !$img->hasMoved()) {
                        $newName = $img->getRandomName();
                        $img->move($uploadPath, $newName);
                        $uploadedImages[] = 'assets/images/reviews/' . $newName;
                    }
                }
            }

            $reviewData = [
                'b_id'        => 0,
                'name'        => $name,
                'email'       => $email,
                'r_title'     => $city,
                'city'        => $city,
                'r_desc'      => $desc,
                'r_img'       => implode(',', $uploadedImages),
                'stars'       => $stars,
                'views'       => 0,
                'status'      => 1, // Auto-approve
                'posted_date' => date('Y-m-d H:i:s')
            ];

            $reviewsMdl = new Reviews_mdl();
            $reviewsMdl->insert_review($reviewData);

            if ($isAjax) {
                return $this->response->setJSON([
                    'status'  => 'success',
                    'message' => 'Thank you! Your review has been submitted successfully.',
                    'review'  => [
                        'name'   => $name,
                        'email'  => $email,
                        'city'   => $city,
                        'r_desc' => $desc,
                        'stars'  => $stars
                    ]
                ]);
            }

            session()->setFlashdata('success', 'Thank you! Your review has been submitted successfully.');
            return redirect()->to(site_url('reviews'));
        }

        return redirect()->to(site_url('reviews'));
    }

    public function single($id = 0): string
    {
        $db = \Config\Database::connect();
        $review = $db->table('reviews')
            ->where('r_id', (int) $id)
            ->where('status', 1)
            ->get()
            ->getRow();

        if (!$review) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        $company = $this->comp['company3'] ?? '';
        $data['title']       = "Customer Review - " . $review->name . " | " . $company;
        $data['description'] = substr(strip_tags($review->r_desc), 0, 160);
        $data['page']        = 'single-review';
        $data['module']      = 'reviews';
        $data['review']      = $review;
        $data['view_file']   = 'Modules\Reviews\Views\single_review';

        return Template::layout2($data);
    }
}
