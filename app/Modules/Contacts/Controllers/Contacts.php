<?php

namespace Modules\Contacts\Controllers;

use App\Controllers\BaseController;
use Modules\Template\Controllers\Template;
use Modules\Contacts\Models\Contacts_mdl;

class Contacts extends BaseController
{
    protected $contacts_mdl;

    public function __construct()
    {
        $this->contacts_mdl = new Contacts_mdl();
    }

    /**
     * Contact Us Page (Layout 2)
     */
    public function index(): string
    {
        $data['title'] = "Contact Us | " . ($this->comp['company3'] ?? 'QuickRelocation');
        $data['description'] = "Get in touch with " . ($this->comp['company3'] ?? 'QuickRelocation') . " for all your relocation and transportation needs. Call us at " . ($this->comp['phone'] ?? '') . ".";
        $data['page'] = 'contact';
        $data['module'] = 'contacts';
        $data['view_file'] = 'contacts';
        $data['success'] = session()->getFlashdata('success');
        $data['error'] = session()->getFlashdata('error');

        return Template::layout2($data);
    }

    /**
     * Booking AJAX Endpoint - Exact CI3 behavior
     * Accepts POST from quoteform & quotemodal
     * Returns "1" on success or HTML alert on error
     */
    public function booking()
    {
        $rules = [
            'name' => 'required|trim',
            'phone' => 'required|trim|numeric|min_length[10]|max_length[13]',
            'email' => 'permit_empty|valid_email',
            'message' => 'permit_empty',
        ];

        if (!$this->validate($rules)) {
            $errors = $this->validator->getErrors();
            $errorHtml = "<div class='alert alert-danger' style='color:#dc2626; background:#fee2e2; border:1px solid #fca5a5; padding:10px 15px; border-radius:6px; margin-top:10px;'><ul style='margin-bottom:0; padding-left:18px;'>";
            foreach ($errors as $err) {
                $errorHtml .= "<li>" . esc($err) . "</li>";
            }
            $errorHtml .= "</ul></div>";
            return $this->response->setBody($errorHtml);
        }

        $check = $this->contacts_mdl->bookings();
        if ($check) {
            return $this->response->setBody("1");
        }

        return $this->response->setBody("<div class='alert alert-danger' style='color:#dc2626; background:#fee2e2; border:1px solid #fca5a5; padding:10px 15px; border-radius:6px; margin-top:10px;'>Failed to submit booking enquiry. Please try again.</div>");
    }

    /**
     * Contact AJAX & Standard POST Endpoint - Exact CI3 behavior
     * Returns "1" on success for AJAX, or redirect for normal POST
     */
    public function contact()
    {
        $rules = [
            'name' => 'required|trim',
            'phone' => 'required|trim|numeric|min_length[10]|max_length[13]',
        ];

        if (!$this->validate($rules)) {
            $errors = $this->validator->getErrors();
            $errorHtml = "<div class='alert alert-danger' style='color:#dc2626; background:#fee2e2; border:1px solid #fca5a5; padding:10px 15px; border-radius:6px; margin-top:10px;'><ul style='margin-bottom:0; padding-left:18px;'>";
            foreach ($errors as $err) {
                $errorHtml .= "<li>" . esc($err) . "</li>";
            }
            $errorHtml .= "</ul></div>";
            return $this->response->setBody($errorHtml);
        }

        $check = $this->contacts_mdl->contact();
        if ($check) {
            return $this->response->setBody("1");
        }

        return $this->response->setBody("<div class='alert alert-danger' style='color:#dc2626; background:#fee2e2; border:1px solid #fca5a5; padding:10px 15px; border-radius:6px; margin-top:10px;'>Failed to submit inquiry. Please try again.</div>");
    }

    /**
     * Legacy send method mapping to contact()
     */
    public function send()
    {
        return $this->contact();
    }

    /**
     * Quote Form Component View
     */
    public function quoteform(array $data = []): string
    {
        $data['comp'] = $this->comp;
        return view('Modules\Contacts\Views\quoteform', $data);
    }

    /**
     * Quote Modal Component View
     */
    public function quotemodal(array $data = []): string
    {
        $data['comp'] = $this->comp;
        return view('Modules\Contacts\Views\quotemodal', $data);
    }


}
