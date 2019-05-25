<?php
		
        $this->load->model('setting/setting');
        $this->load->model('user/user_group');
		$this->load->model('design/layout');

        $this->model_user_user_group->addPermission($this->user->getGroupId(), 'access', 'news/article');
        $this->model_user_user_group->addPermission($this->user->getGroupId(), 'modify', 'news/article');  
		$this->model_user_user_group->addPermission($this->user->getGroupId(), 'access', 'news/setting');
        $this->model_user_user_group->addPermission($this->user->getGroupId(), 'modify', 'news/setting'); 

        $cyco_news_settings = array(
            'cyco_news_global_article_limit' => '10',
            'cyco_news_home_page_meta_title'    => 'News & Events',
			'cyco_news_home_page_name'    	  => 'News & Events',
            'cyco_news_home_page_meta_description' => '',
            'cyco_news_home_page_meta_keyword'    => '',
			'cyco_news_global_status'    => '1'
        );
        $this->model_setting_setting->editSetting('cyco_news', $cyco_news_settings, 0);
		
		$cyco_news_layout = array(
            'name' => 'Cyco News',
            'layout_route' => array(
				'first_route' => array(	
					'store_id' => '0',
					'route' => 'news/%'
				)
			)
        );
		$this->model_design_layout->addLayout($cyco_news_layout);

?>
