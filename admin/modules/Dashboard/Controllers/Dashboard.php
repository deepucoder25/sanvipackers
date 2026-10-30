<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Dashboard extends MX_Controller
{
    function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('username')) { redirect('login'); }
    }
    function index()
    {
    }
    function admin()
    {
        $this->load->view('view');
    }
    function fetch_cards_data()
    {
        $recent_bookings = $this->db->order_by('id', 'DESC')->limit(4)->get('bookings')->result_array();
        $recent_contacts = $this->db->order_by('id', 'DESC')->limit(4)->get('contacts')->result_array();

        $data = array(
            "bookings"        => $this->db->get('bookings')->num_rows(),
            "contact"         => $this->db->get('contacts')->num_rows(),
            "blog"            => $this->db->get('blog')->num_rows(),
            "reviews"         => $this->db->get('reviews')->num_rows(),
            "gallery"         => $this->db->get('gallery')->num_rows(),
            "videogallery"    => $this->db->get('video_gallery')->num_rows(),
            "shipments"       => $this->db->get('ship_main')->num_rows(),
            "tracking"        => $this->db->get('ship_tracking')->num_rows(),
            "recent_bookings" => $recent_bookings,
            "recent_contacts" => $recent_contacts,
        );
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }

    function fetch_notifications()
    {
        $recent_bookings = $this->db->order_by('id', 'DESC')->limit(4)->get('bookings')->result_array();
        $recent_contacts = $this->db->order_by('id', 'DESC')->limit(4)->get('contacts')->result_array();

        $notifications = array();

        foreach ($recent_bookings as $b) {
            $name = !empty($b['name']) ? $b['name'] : 'Customer #' . $b['id'];
            $service = (!empty($b['mfrom']) && !empty($b['mto'])) ? ($b['mfrom'] . ' → ' . $b['mto']) : (!empty($b['msg']) ? $b['msg'] : 'New booking request');
            $time = !empty($b['timestamp']) ? date('d M Y h:i A', strtotime($b['timestamp'])) : 'Recently';

            $notifications[] = array(
                'id'       => 'booking_' . $b['id'],
                'type'     => 'booking',
                'title'    => 'New Booking: ' . $name,
                'desc'     => $service,
                'time'     => $time,
                'link'     => '#/booking',
                'icon'     => 'fa-calendar-check-o',
                'bg_color' => 'notif-icon-blue'
            );
        }

        foreach ($recent_contacts as $c) {
            $name = !empty($c['name']) ? $c['name'] : 'Visitor #' . $c['id'];
            $msg = !empty($c['message']) ? (substr($c['message'], 0, 50) . (strlen($c['message']) > 50 ? '...' : '')) : (!empty($c['phone']) ? 'Phone: ' . $c['phone'] : 'Inquiry message');
            $time = !empty($c['timestamp']) ? date('d M Y h:i A', strtotime($c['timestamp'])) : 'Recently';

            $notifications[] = array(
                'id'       => 'contact_' . $c['id'],
                'type'     => 'contact',
                'title'    => 'Inquiry from ' . $name,
                'desc'     => $msg,
                'time'     => $time,
                'link'     => '#/contact',
                'icon'     => 'fa-envelope-o',
                'bg_color' => 'notif-icon-purple'
            );
        }

        $this->output->set_content_type('application/json')->set_output(json_encode(array(
            'status'        => 'success',
            'notifications' => $notifications,
            'total'         => count($notifications)
        )));
    }
}
