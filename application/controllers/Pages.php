<?php
    class Pages extends MY_Controller{
        public function view($page = 'index'){
            if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php'))
            {
                    // Whoops, we don't have a page for that!
                    show_404();
            }

            $data['title'] = ucfirst($page); // Capitalize the first letter

            $this->render_page('pages/'.$page, $data);
        }
    }