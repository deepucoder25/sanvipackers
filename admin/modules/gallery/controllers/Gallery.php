<?php if (! defined('BASEPATH')) exit('No direct script access allowed');
class Gallery extends MX_Controller
{
    function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('username')) { redirect('login'); }
        $this->load->model('gallery_mdl');
    }

    function index()
    {
        $this->load->view('index');
    }

    function image_upload()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('title', 'Title', 'trim');

        // Prevent inserting records without an image on new uploads
        if (empty($_POST['auto_id']) && (empty($_FILES['image']['name']) || empty($_FILES['image']['tmp_name']))) {
            echo "Please select an image file to upload.";
            return;
        }

        if (empty($_FILES['image']['name']) && empty($_POST['auto_id'])) {
            $this->form_validation->set_rules('image', 'Image', 'required');
        }
        if ($this->form_validation->run() == TRUE) 
        {
            $data = array();
            $data['title'] = isset($_POST['title']) ? $_POST['title'] : '';
            $data['album_id'] = 0;
            $data['album_name'] = 'General';
            
            if (!empty($_FILES['image']['name'])) {
                // upload coder starts here
                $config['upload_path'] = './assets/temp';
                $config['allowed_types'] = 'gif|jpg|png|jpeg|webp|jfif|WEBP|JFIF|pdf';
                $config['new_image'] = './assets/uploads/gallery/';
                $config['min_width']=200;
             
                $rand_number = mt_rand(0, 85);
                $timestamp = time();
                $config['file_name'] =  $rand_number . $timestamp;
                
                $config['overwrite'] = false;
                $config['remove_spaces'] = true;
                
                $this->load->library('upload', $config);
                if (! $this->upload->do_upload('image')) 
                {
                    echo $this->upload->display_errors();
                    die();
                } 
                else 
                {   
                    $image = $this->upload->data();
                    // image manipulation resizing 1
                    $config['source_image'] = './assets/temp/' . $image['file_name'];
                    $config['maintain_ratio'] = TRUE;
                    $this->load->library('image_lib', $config);
                    $this->image_lib->initialize($config);
                    
                    if (! $this->image_lib->resize()) 
                    {
                        echo $this->image_lib->display_errors();die();
                    }
                    
                    $this->image_lib->clear();
                    // image manipulation resizing 2
                    $config['source_image'] = './assets/temp/' . $image['file_name'];
                    $config['new_image'] = './assets/uploads/gallery/thumb/';
                    $config['file_name'] =  $rand_number . $timestamp;
                    $config['maintain_ratio'] = TRUE;
                    $config['overwrite'] = FALSE;
                    $this->load->library('image_lib', $config);
                    $this->image_lib->initialize($config);
                    if (! $this->image_lib->resize())
                    {
                        echo $this->image_lib->display_errors();die();
                    }
                    else 
                    {             
                        if (!empty($config['source_image']) && is_file($config['source_image'])) { @unlink($config['source_image']); }
                        $data['image'] = $image['file_name'];
                    }
                }
            }
            
            if (!empty($_POST['auto_id'])) {
                $where['auto_id'] = $_POST['auto_id'];
                echo $this->gallery_mdl->update_data($where, $data);
            } else {
                $data['status'] = 1;
                echo $this->gallery_mdl->add_data($data);
            }
        }
        else echo validation_errors();
        // Upload code end
    }
   
    function view_data()
    {
        if (isset($_GET['id']))
	         $where['auto_id']=$_GET['id'];
        else $where = null;
        
        if (isset($_GET['data']))
	        $select=$_GET['data'];
	    else $select="*";
	    
        $return=$this->gallery_mdl->view_data($where,$select);
        $this->output->set_content_type('application/json')->set_output(json_encode($return->result_array()));
    }

    function delete_data()
    {
        if (isset($_GET['id']) && $_GET['id'])
        {
            $id = (int)$_GET['id'];
            $this->db->where('auto_id', $id);
            $query = $this->db->get("gallery");
            if ($query && method_exists($query, 'result')) {
                foreach ($query->result() as $row)
                {
                    if (!empty($row->image)) {
                        $img = basename(trim($row->image));
                        if (!empty($img)) {
                            $paths = [
                                FCPATH . 'assets/uploads/gallery/' . $img,
                                FCPATH . 'assets/uploads/gallery/thumb/' . $img,
                                './assets/uploads/gallery/' . $img,
                                './assets/uploads/gallery/thumb/' . $img,
                            ];
                            foreach ($paths as $path) {
                                if (is_file($path)) {
                                    @unlink($path);
                                }
                            }
                        }
                    }
                }
            }
            $where = ['auto_id' => $id];
            $deleted = $this->gallery_mdl->delete_data($where);
            echo $deleted ? "1" : "0";
        } else {
            echo "Not Deleted";
        }
    }

    function update_status()
    {
        if (isset($_GET['id']) && $_GET['id'] && isset($_GET['status']))
        {
            $where['auto_id'] = $_GET['id'];
            $data['status'] = $_GET['status'];
            echo $this->gallery_mdl->update_data($where,$data);
        }else echo "invalid Request";
    }

    function update_album_names($where,$name)
    {
        $data['album_name']=$name;
        return $this->gallery_mdl->update_data($where,$data);
    }
}
