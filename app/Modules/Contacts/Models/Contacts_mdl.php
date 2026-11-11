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
            'protocol' => 'smtp',
            'SMTPHost' => 'smtp.hostinger.com',
            'SMTPPort' => 587,
            'SMTPUser' => 'info@sanvipackers.com',
            'SMTPPass' => 'g+6&Nir?k;cHcK?4',
            'mailType' => 'html',
            'charset' => 'utf-8',
            'CRLF' => "\r\n",
            'newline' => "\r\n"
        ];
    }

    public function bookings(): bool
    {
        $request = service('request');
        $name = $request->getPost('name') ?: 'Customer';
        $email = $request->getPost('email') ?: '';
        $phone = $request->getPost('phone');
        $mfrom = $request->getPost('mfrom') ?: '';
        $mto = $request->getPost('mto') ?: '';
        $service = $request->getPost('service') ?: ($request->getPost('mtype') ?: '');
        $shifting_size = $request->getPost('shifting_size') ?: ($request->getPost('item_type') ?: ($request->getPost('size') ?: ''));
        $msg = $request->getPost('message');

        try {
            if ($this->db) {
                $this->db->table('bookings')->insert([
                    'name' => $name,
                    'email' => $email,
                    'phone' => $phone,
                    'mfrom' => $mfrom,
                    'mto' => $mto,
                    'service' => $service,
                    'mtype' => $service,
                    'shifting_size' => $shifting_size,
                    'item_type' => $shifting_size,
                    'msg' => $msg
                ]);
            }
        } catch (\Throwable $e) {
            log_message('warning', 'Bookings DB Error: ' . $e->getMessage());
        }

        $this->sendEmail(
            'New Booking / Quote Enquiry',
            "<h3>New Moving Quote Enquiry</h3>
            <p><strong>Name:</strong> " . esc($name) . "</p>
            <p><strong>Phone:</strong> " . esc($phone) . "</p>
            <p><strong>Moving From:</strong> " . esc($mfrom) . "</p>
            <p><strong>Moving To:</strong> " . esc($mto) . "</p>
            <p><strong>Select Service:</strong> " . esc($service) . "</p>
            <p><strong>Shifting Size:</strong> " . esc($shifting_size) . "</p>
            <p><strong>Email:</strong> " . esc($email) . "</p>
            <p><strong>Message / Goods:</strong> " . nl2br(esc($msg)) . "</p>"
        );

        return true;
    }

    public function contact(): bool
    {
        $request = service('request');
        $name = $request->getPost('name');
        $email = $request->getPost('email');
        $phone = $request->getPost('phone');
        $qry = $request->getPost('message');

        try {
            if ($this->db) {
                $this->db->table('contacts')->insert([
                    'name' => $name,
                    'phone' => $phone,
                    'message' => $qry,
                    'email' => $email
                ]);
            }
        } catch (\Throwable $e) {
            log_message('warning', 'Contacts DB Error: ' . $e->getMessage());
        }

        $this->sendEmail(
            'New Contact Enquiry',
            "<h3>New Contact Message</h3>
            <p><strong>Name:</strong> " . esc($name) . "</p>
            <p><strong>Phone:</strong> " . esc($phone) . "</p>
            <p><strong>Email:</strong> " . esc($email) . "</p>
            <p><strong>Message:</strong> " . nl2br(esc($qry)) . "</p>"
        );

        return true;
    }

    private function sendEmail(string $subject, string $message): bool
    {
        try {
            $email = service('email');
            $email->initialize($this->emailConfig);

            $email->setFrom($this->emailConfig['SMTPUser'], 'Sanvi Packers & Movers');
            $email->setTo('info@sanvipackers.com');
            $email->setSubject($subject);
            $email->setMessage($message);

            if (!$email->send()) {
                log_message('error', 'Email Send Error: ' . $email->printDebugger(['headers']));
                return false;
            }
            return true;
        } catch (\Throwable $e) {
            log_message('error', 'Email Exception: ' . $e->getMessage());
            return false;
        }
    }
}
