<?php

namespace Modules\Contacts\Models;

use CodeIgniter\Model;

class Contacts_mdl extends Model
{
    private $emailConfig;

    public function __construct()
    {
        parent::__construct();
        $this->emailConfig = [
            'protocol'  => 'smtp',
            'SMTPHost'  => '',
            'SMTPPort'  => 587,
            'SMTPUser'  => '',
            'SMTPPass'  => '',
            'mailType'  => 'html',
            'charset'   => 'utf-8',
            'CRLF'      => "\r\n",
            'newline'   => "\r\n"
        ];
    }

    public function bookings(): bool
    {
        $request = service('request');
        $name    = $request->getPost('name');
        $email   = $request->getPost('email');
        $phone   = $request->getPost('phone');
        $mfrom   = $request->getPost('mfrom');
        $mto     = $request->getPost('mto');
        $msg     = $request->getPost('message');

        // Insert booking data into the database (Config/Database.php se auto-connect)
        $this->db->table('bookings')->insert([
            'name'  => $name,
            'email' => $email,
            'phone' => $phone,
            'mfrom' => $mfrom,
            'mto'   => $mto,
            'msg'   => $msg
        ]);

        // Admin notification email
        $msgd = "Services Needed";
        $adminMessage = "<div style='padding:30px;background:#e6e6e6;font-size: 18px !important;'>Client's Query: <b><q>$msgd</q></b><br><br>Client's Name:  <b>" . esc($name) . "</b><br><br>From: <b>" . esc($mfrom) . "</b><br><br>To: <b>" . esc($mto) . "</b><br><br>Phone Number: <b><a href='tel:" . esc($phone) . "'>" . esc($phone) . "</a></b><br><br>Email: <b> " . esc($email) . "</b><br><br>Client Msg: <b>" . esc($msg) . "</b></div>";

        $mailService = service('email');
        if (!empty($this->emailConfig['SMTPHost'])) {
            $mailService->initialize($this->emailConfig);
        }
        $mailService->setTo("");
        $mailService->setFrom("", "");
        $mailService->setSubject('New Booking Enquiry Received');
        $mailService->setMessage($adminMessage);
        @$mailService->send();

        return true;
    }

    public function contact(): bool
    {
        $request = service('request');
        $name    = $request->getPost('name');
        $email   = $request->getPost('email');
        $phone   = $request->getPost('phone');
        $qry     = $request->getPost('message');

        // Insert contact data into the database
        $this->db->table('contacts')->insert([
            'name'    => $name,
            'phone'   => $phone,
            'message' => $qry,
            'email'   => $email
        ]);

        // Admin notification email
        $message = "<div style='padding:30px;background:#e6e6e6;font-size: 18px !important;'>Client's Query: <b><q>" . esc($qry) . "</q></b><br><br>Client's Name:  <b>" . esc($name) . "</b><br><br>Phone Number: <b><a href='tel:" . esc($phone) . "'>" . esc($phone) . "</a></b><br><br>Email: <b> " . esc($email) . "</b></div>";

        $mailService = service('email');
        if (!empty($this->emailConfig['SMTPHost'])) {
            $mailService->initialize($this->emailConfig);
        }
        $mailService->setTo("");
        $mailService->setFrom("", "");
        $mailService->setSubject('New Contacts Enquiry Received');
        $mailService->setMessage($message);
        @$mailService->send();

        return true;
    }
}
